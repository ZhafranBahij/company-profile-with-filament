<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT Antah Berantah Jaya',
            'email' => 'antahberantah@mail.com',
            'address' => 'Jalan Simatupang RT 69 RW 100',
            'phone_number' => '080000001223',
            'fax' => '080000001223',
            'instagram_url' => 'https://www.instagram.com/',
            'facebook_url' => 'https://www.facebook.com/',
            'twitter_url' => 'https://twitter.com/',
            'linkedin_url' => 'https://www.linkedin.com/',
            'youtube_url' => 'https://www.youtube.com/',
            'tiktok_url' => 'https://www.tiktok.com/',
            'created_by_id' => 1,
            'updated_by_id' => 1,
        ]);
    }
}
