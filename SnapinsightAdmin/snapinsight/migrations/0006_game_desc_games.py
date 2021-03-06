# Generated by Django 3.0.8 on 2020-08-01 20:04

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('snapinsight', '0005_solutions_name'),
    ]

    operations = [
        migrations.CreateModel(
            name='Game_desc',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.CharField(max_length=500)),
                ('principle', models.CharField(max_length=500)),
            ],
        ),
        migrations.CreateModel(
            name='Games',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.CharField(max_length=500)),
                ('some_point', models.CharField(max_length=500)),
                ('what', models.CharField(max_length=500)),
                ('why', models.CharField(max_length=500)),
                ('how', models.CharField(max_length=500)),
                ('keyword', models.CharField(max_length=500)),
                ('name', models.CharField(default='', max_length=500)),
            ],
        ),
    ]
