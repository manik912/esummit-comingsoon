from django.shortcuts import render, redirect, HttpResponse
from .forms import *
from django.contrib import messages
from django.core.mail import send_mail, EmailMessage
import xlwt
from .models import *
# Create your views here.


def register(request):
    if(request.method == 'POST'):
        form = RegisterForm(request.POST, request.FILES)
        if form.is_valid():
            messages.add_message(request, messages.INFO, 'Thank You for registering!')
            email = form.cleaned_data.get('email')
            name = form.cleaned_data.get('name')
            form.save()
            send_mail(
                        'E-Summit 21', 
                        f"""Dear { name },
I hope this email finds you in the best of your health. We at EDC, thank you for registering for E-Summit'21. We are extremely excited and glad that you could join us on this journey to revive the hustle.

With this fiesta around the corner, you will get your regular updates on events and all other further information on the mail itself.

We hope you savor this journey of new challenges, unlimited ideas, and untiring zeal.

Cheers,
Team EDC
                        """, 
                        'esummit@edctiet.com',
                        [email],
                    )
            return redirect('register')

    form = EmailForm()
    context = {
        'form' : form,
    }
    return render(request, 'home/index.html', context)

def gallery(request):
    return render(request, 'home/gallery.html')



def export_answers_xls(request):
    if request.user.is_superuser:
        response = HttpResponse(content_type='application/ms-excel')
        response['Content-Disposition'] = 'attachment; filename="responses.xls"'
    
        wb = xlwt.Workbook(encoding='utf-8')
        ws = wb.add_sheet('Esummit Responses') # this will make a sheet named Users Data
    
        # Sheet header, first row
        row_num = 0
    
        font_style = xlwt.XFStyle()
        font_style.font.bold = True
    
        columns = ['Email', 'Name', 'Contact No', 'Thapar Student', 'unwind', 'elevate', 'bootcamp', 'internship fair']
    
        for col_num in range(len(columns)):
            ws.write(row_num, col_num, columns[col_num], font_style) # at 0 row 0 column 
    
        # Sheet body, remaining rows
        font_style = xlwt.XFStyle()
    
        rows = Register.objects.all().values_list('email', 'name', 'contact_no', 'thapar_student','unwind_interested', 'elevate_interested', 'bootcamp_interested', 'if_interested')
        for row in rows:
            row_num += 1
            for col_num in range(len(row)):
                ws.write(row_num, col_num, row[col_num], font_style)
    
        wb.save(response)
    
        return response        
    else:
        return redirect('register')


