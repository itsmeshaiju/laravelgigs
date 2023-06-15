<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
         \App\Models\Listing::factory(5)->create();

        //  Listing::create([
        //     'title'=>'DotNet Developer',
        //     'tag'=>'DotNet',
        //     'company'=>'Infolitz',
        //     'location'=>'kochi',
        //     'email'=>'hr@infolitz.com',
        //     'website'=>'http://infolitz.com',
        //     'description'=>'Roles and responsibilities
        //     Building user interfaces
        //     Troubleshooting software prototypes
        //     Providing technical support to users
        //     Developing programs for .NET applications
        //     Creating procedures for running the applications
        //     Knowledge in C#, F#, VB.NET
        //     They must also understand database application, such as: SQL Server ,NoSQL, Oracle'
        //  ]);

        //  Listing::create([
        //     'title'=>'Angular Developer',
        //     'tag'=>'Angular,Javascript',
        //     'company'=>'Infolitz',
        //     'location'=>'kochi',
        //     'email'=>'hr@infolitz.com',
        //     'website'=>'http://infolitz.com',
        //     'description'=>'Roles and responsibilities
        //     Designing and developing user interfaces using angular JS best practices.
        //     Adapting interface for modern internet applications using the latest front-end technologies.
        //     Writing JavaScript, CSS, and HTML.
        //     Developing product analysis tasks.
        //     Making complex technical and design decisions for AngularJS projects.
        //     Developing application codes and unit tests in AngularJS, Java Technologies, and Rest Web Services.
        //     Conducting performance tests.
        //     Consulting with the design team.
        //     Ensuring high performance of applications and providing support.'
        //  ]);
    }
}
