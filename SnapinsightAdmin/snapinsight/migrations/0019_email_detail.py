# Generated by Django 3.0.8 on 2020-08-07 09:52

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('snapinsight', '0018_team'),
    ]

    operations = [
        migrations.CreateModel(
            name='Email_Detail',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('about', models.CharField(max_length=500)),
                ('when', models.CharField(max_length=500)),
            ],
        ),
    ]
