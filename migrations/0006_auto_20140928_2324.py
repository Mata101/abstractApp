# -*- coding: utf-8 -*-
# Generated by Django 1.9.2 on 2014-09-28 15:24
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('abstractApp', '0005_auto_20140928_2316'),
    ]

    operations = [
        migrations.RenameField(
            model_name='order',
            old_name='product_name',
            new_name='product_id',
        ),
        migrations.RemoveField(
            model_name='order',
            name='product_price',
        ),
        migrations.RemoveField(
            model_name='order',
            name='product_type',
        ),
        migrations.AddField(
            model_name='history',
            name='product_id',
            field=models.CharField(max_length=250, null='FALSE'),
        ),
        migrations.AlterField(
            model_name='history',
            name='clientid',
            field=models.CharField(max_length=250, null='FALSE'),
        ),
        migrations.AlterField(
            model_name='order',
            name='clientid',
            field=models.CharField(max_length=250, null='FALSE'),
        ),
        migrations.AlterField(
            model_name='order',
            name='quantity',
            field=models.CharField(max_length=250, null='FALSE'),
        ),
    ]
