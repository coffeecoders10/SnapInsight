# Generated by Django 3.0.8 on 2020-07-31 09:59

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Overview',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.CharField(max_length=500)),
                ('some_point', models.CharField(max_length=500)),
                ('principle', models.CharField(max_length=500)),
                ('quote', models.CharField(max_length=500)),
                ('vision', models.CharField(max_length=500)),
                ('mission', models.CharField(max_length=500)),
                ('goals', models.CharField(max_length=500)),
                ('keyword', models.CharField(max_length=500)),
            ],
        ),
    ]
