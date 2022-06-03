# Generated by Django 3.0.8 on 2020-08-04 10:25

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('snapinsight', '0007_legal'),
    ]

    operations = [
        migrations.CreateModel(
            name='Services',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=500)),
                ('description', models.CharField(max_length=500)),
                ('some_point', models.CharField(max_length=500)),
                ('cost', models.CharField(max_length=500)),
                ('plan', models.CharField(max_length=500)),
                ('feature', models.CharField(max_length=500)),
                ('keyword', models.CharField(max_length=500)),
            ],
        ),
    ]