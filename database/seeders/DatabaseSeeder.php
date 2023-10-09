<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //Listing::factory(6)->create();

        $user = User::factory()->create(
            [
                'name'=>'Jack Sparrow',
                'email'=>'jackSparrow@email.com',
                'password'=>'jack123'
            ]
        );

        // Listing::factory(5)->create([
        //     'user_id'=>$user->id
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    
        Listing::create(
            [
                'title'=>'Laravel Senior Developer',
                'user_id'=>$user->id,
                'tags'=>'laravel, php, senior',
                'company'=>'Acme Corp',
                'location'=>'Boston, MA',
                'email'=>'acme@email.com',
                'website'=>'https://www.acme.com',
                'description'=>"We are looking for a Web Developer to design plans, create and code web pages that fit our customer's requirements.
                 The ideal candidate will be familiar with the latest trends and technology in the industry.
                 Responsibilities:

                -Work with other development teams for more efficiency
                -Focus on developing elegant solutions to complex problems
                -Present your own ideas and suggest better solutions
                -Use best practices at every stage of the development cycle
                -Develop and manage a set of internal and external APIs
                -Always make sure that all code is error-free
                -Manage the overall structure and design of the company's corporate website"
            ]
        );
        Listing::create(
            [
                'title'=>'Laravel Junior Developer',
                'user_id'=>$user->id,
                'tags'=>'laravel, php, junior',
                'company'=>'Acme Corp',
                'location'=>'Boston, MA',
                'email'=>'acme@email.com',
                'website'=>'https://www.acme.com',
                'description'=>"We are looking for a Web Developer to design plans, create and code web pages that fit our customer's requirements.
                The ideal candidate will be familiar with the latest trends and technology in the industry.
                Responsibilities:

               -Work with other development teams for more efficiency
               -Focus on developing elegant solutions to complex problems
               -Present your own ideas and suggest better solutions
               -Use best practices at every stage of the development cycle
               -Develop and manage a set of internal and external APIs
               -Always make sure that all code is error-free
               -Manage the overall structure and design of the company's corporate website"
            ]
        );
        Listing::create(
            [
                'title'=>'Laravel Middle Developer',
                'user_id'=>$user->id,
                'tags'=>'laravel, middle, php',
                'company'=>'Acme Corp',
                'location'=>'MAYAMI',
                'email'=>'acme@email.com',
                'website'=>'https://www.acme.com',
                'description'=>"We are looking for a Web Developer to design plans, create and code web pages that fit our customer's requirements.
                The ideal candidate will be familiar with the latest trends and technology in the industry.
                Responsibilities:

               -Work with other development teams for more efficiency
               -Focus on developing elegant solutions to complex problems
               -Present your own ideas and suggest better solutions
               -Use best practices at every stage of the development cycle
               -Develop and manage a set of internal and external APIs
               -Always make sure that all code is error-free
               -Manage the overall structure and design of the company's corporate website"
            ]
        );
        Listing::create(
            [
                'title'=>'Junior PHP Developer with JavaScript',
                'user_id'=>$user->id,
                'tags'=>'laravel, php, junior, javascript',
                'company'=>'Acme Corp',
                'location'=>'Boston, MA',
                'email'=>'acme@email.com',
                'website'=>'https://www.acme.com',
                'description'=>"We are looking for a Web Developer to design plans, create and code web pages that fit our customer's requirements.
                The ideal candidate will be familiar with the latest trends and technology in the industry.
                Responsibilities:

               -Work with other development teams for more efficiency
               -Focus on developing elegant solutions to complex problems
               -Present your own ideas and suggest better solutions
               -Use best practices at every stage of the development cycle
               -Develop and manage a set of internal and external APIs
               -Always make sure that all code is error-free
               -Manage the overall structure and design of the company's corporate website"
            ]
        );
        Listing::create(
            [
                'title'=>'Senior PHP Developer with JavaScript',
                'user_id'=>$user->id,
                'tags'=>'laravel, php, senior, javascript',
                'company'=>'Acme Corp',
                'location'=>'Boston, MA',
                'email'=>'acme@email.com',
                'website'=>'https://www.acme.com',
                'description'=>"We are looking for a Web Developer to design plans, create and code web pages that fit our customer's requirements.
                The ideal candidate will be familiar with the latest trends and technology in the industry.
                Responsibilities:

               -Work with other development teams for more efficiency
               -Focus on developing elegant solutions to complex problems
               -Present your own ideas and suggest better solutions
               -Use best practices at every stage of the development cycle
               -Develop and manage a set of internal and external APIs
               -Always make sure that all code is error-free
               -Manage the overall structure and design of the company's corporate website"
            ]
        );
    }
}
