from django.urls import path
from .views import *

urlpatterns = [
    path('',                register,			name='register'),
    path('gallery/',        gallery,			name='gallery'),
    path('export-excel',    export_answers_xls,       name='export'),
]