# -*- coding: utf-8 -*-
# Generated by Django 1.9.2 on 2014-09-28 15:16
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('abstractApp', '0004_auto_20140928_2315'),
    ]

    operations = [
        migrations.AlterField(
            model_name='order',
            name='clientid',
            field=models.IntegerField(null='FALSE'),
        ),
        migrations.AlterField(
            model_name='order',
            name='quantity',
            field=models.IntegerField(null='FALSE'),
        ),
    ]
