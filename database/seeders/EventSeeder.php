<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Industry;
use App\Models\Topic;
use App\Models\Speaker;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        // Event 1: CX & Loyalty Summit
        $cxEvent = Event::create([
            'name' => 'Middle East CX & Loyalty Summit 2025',
            'slug' => 'cx-loyalty-summit-2025',
            'tagline' => 'Redefining Customer Experience & Loyalty in the Digital Age',
            'description' => 'Join industry leaders as we explore cutting-edge strategies in customer experience and loyalty programs. Discover how leading organizations are leveraging technology, data analytics, and personalization to create unforgettable customer journeys.',
            'overview' => 'The Middle East CX & Loyalty Summit brings together customer experience professionals, loyalty program managers, and digital transformation leaders to share insights, best practices, and innovations shaping the future of customer engagement in the region.',
            'start_date' => '2025-03-15',
            'end_date' => '2025-03-16',
            'venue' => 'The Ritz-Carlton',
            'location' => 'Dubai, UAE',
            'website_url' => 'www.cxloyaltysummit.com',
            'primary_color' => '#1a365d',
            'secondary_color' => '#00d4ff',
            'expected_attendees' => 500,
            'speakers_count' => 25,
            'organizations_count' => 150,
            'is_featured' => true,
            'is_active' => true,
            'stats' => [
                'delegates' => '500+',
                'speakers' => '25+',
                'organizations' => '150+',
                'networking_hours' => '12+',
            ],
            'why_attend' => 'This Summit will focus on emerging trends in customer experience and loyalty programs. Delegates will learn from real-life case studies, business insights and lessons learned from leaders to discover the best strategies, tools & methods for creating exceptional customer experiences.

- Gain Knowledge and Insights from Top Industry Leaders and Experts from across the globe
- Network with Industry Peers in a solution-oriented environment
- Discuss Significant Partnerships and Collaborations with Industry leaders
- Deep Dive into Insights derived from real-time case studies
- Build Industry Ecosystem Collaboration to address latest challenges',
            'why_sponsor' => 'The Middle East CX & Loyalty Summit 2025 presents the perfect opportunity for solution providers to engage with key decision makers such as CEOs, CMOs, Heads of Customer Experience, Heads of Loyalty Programs from leading organizations to differentiate their solution offerings.',
            'contact_email' => 'info@cxloyaltysummit.com',
            'contact_phone' => '+971 4 243 4677',
        ]);

        // CX Event Topics
        $cxTopics = [
            'AI-Powered Customer Experience Personalization',
            'Omnichannel Customer Journey Mapping',
            'Loyalty Program Innovation & Gamification',
            'Data Analytics for Customer Insights',
            'Voice of Customer (VoC) Programs',
            'Customer Service Automation & Chatbots',
            'Emotional Intelligence in CX',
            'Subscription Models & Retention Strategies',
            'Mobile-First Customer Engagement',
            'Building Customer Communities',
        ];

        foreach ($cxTopics as $index => $topic) {
            Topic::create([
                'event_id' => $cxEvent->id,
                'title' => $topic,
                'order' => $index,
            ]);
        }

        // CX Event Speakers
        $cxSpeakers = [
            ['name' => 'Sarah Al Mansouri', 'title' => 'Chief Customer Officer', 'company' => 'Emirates NBD'],
            ['name' => 'Michael Chen', 'title' => 'VP Customer Experience', 'company' => 'Careem'],
            ['name' => 'Fatima Abdullah', 'title' => 'Head of Loyalty Programs', 'company' => 'Majid Al Futtaim'],
            ['name' => 'John Roberts', 'title' => 'Director CX Strategy', 'company' => 'Etihad Airways'],
            ['name' => 'Laila Hassan', 'title' => 'Chief Marketing Officer', 'company' => 'Noon'],
        ];

        foreach ($cxSpeakers as $index => $speaker) {
            Speaker::create([
                'event_id' => $cxEvent->id,
                'name' => $speaker['name'],
                'title' => $speaker['title'],
                'company' => $speaker['company'],
                'order' => $index,
            ]);
        }

        $cxEvent->industries()->attach(Industry::whereIn('name', [
            'Banking & Finance', 'Retail', 'E-commerce', 'Telecommunications', 'Technology'
        ])->pluck('id'));

        // Event 2: PropTech Summit
        $propTechEvent = Event::create([
            'name' => 'Middle East PropTech Innovation Summit 2023',
            'slug' => 'proptech-summit-2023',
            'tagline' => 'Embracing PropTech to drive Innovation in Real Estate',
            'description' => 'Despite global headwinds, the real estate market in Dubai continues to leap over other metropolises amid global economic challenges. Join us to explore how PropTech is revolutionizing property management, transactions, and customer experiences.',
            'overview' => 'Proptech, a combination of property and technology, refers to the management, handling, and monetization of real estate assets using technologies such as AI, blockchain and automation. This forum provides a platform for the regional Real Estate fraternity to discuss the new era of PropTech.',
            'start_date' => '2023-05-23',
            'end_date' => '2023-05-24',
            'venue' => 'Dubai World Trade Centre',
            'location' => 'Dubai, UAE',
            'website_url' => 'www.dubaiproptech.com',
            'primary_color' => '#c41e3a',
            'secondary_color' => '#ffd700',
            'expected_attendees' => 400,
            'speakers_count' => 20,
            'organizations_count' => 120,
            'is_featured' => true,
            'is_active' => false,
            'stats' => [
                'delegates' => '400+',
                'speakers' => '20+',
                'organizations' => '120+',
                'exhibitors' => '30+',
            ],
            'why_attend' => 'This Summit will focus on the emerging trends in digital transformation of the Real Estate Industry. Delegates will learn from real-life case studies, business insights and lessons learned from leaders.

- Gain Knowledge and Insights from Top Industry Leaders and Experts from across the globe
- Network with Industry Peers in a solution-oriented environment
- Discuss Significant Partnerships and Collaborations with Industry leaders
- Deep Dive into Insights derived from real-time case studies
- Build Industry Ecosystem Collaboration to address latest challenges',
            'why_sponsor' => 'MIDDLE EAST PROPTECH INNOVATION SUMMIT 2023 presents the perfect opportunity for solution providers to engage with key decision makers such as CEOs, CIOs, Heads of Property Management, Heads of Facility Management from leading Property Developers.',
            'contact_email' => 'info@dubaiproptech.com',
            'contact_phone' => '+971 4 243 4677',
        ]);

        // PropTech Topics
        $propTechTopics = [
            'Big Data collection and analysis of property data',
            'AI and cloud-based software to streamline administration tasks',
            'Virtual Reality tools to enhance the property viewing experience',
            'Automated Property Management',
            'Blockchain powered Real Estate transactions',
            'IoT smart network devices and sensors for efficient property maintenance',
            'Online platforms and chatbots to facilitate the customer experience',
            'A new era of Crowdfunding as an alternate source of property funding',
            'Innovation in mobile applications for tenants and landlords',
            'Impact of Cryptocurrency on Real Estate sector',
        ];

        foreach ($propTechTopics as $index => $topic) {
            Topic::create([
                'event_id' => $propTechEvent->id,
                'title' => $topic,
                'order' => $index,
            ]);
        }

        // PropTech Speakers
        $propTechSpeakers = [
            ['name' => 'Ahmed Al Khaja', 'title' => 'CEO', 'company' => 'Emaar Properties'],
            ['name' => 'Lisa Thompson', 'title' => 'Chief Innovation Officer', 'company' => 'DAMAC Properties'],
            ['name' => 'Omar Busanad', 'title' => 'Head of Technology', 'company' => 'Dubai Properties'],
            ['name' => 'Jennifer Martinez', 'title' => 'VP Digital Transformation', 'company' => 'Nakheel'],
        ];

        foreach ($propTechSpeakers as $index => $speaker) {
            Speaker::create([
                'event_id' => $propTechEvent->id,
                'name' => $speaker['name'],
                'title' => $speaker['title'],
                'company' => $speaker['company'],
                'order' => $index,
            ]);
        }

        $propTechEvent->industries()->attach(Industry::whereIn('name', [
            'Real Estate', 'Property Development', 'Property Management', 'Technology', 'Investment'
        ])->pluck('id'));

        // Event 3: Future Banks Summit
        $bankEvent = Event::create([
            'name' => '4th Annual Future Banks Summit KSA 2023',
            'slug' => 'future-banks-summit-ksa-2023',
            'tagline' => 'Digital Innovations Transforming the Kingdom\'s Banking Landscape',
            'description' => 'The banking industry worldwide is undergoing phenomenal change, giving banks an opportunity to relook into their existing business models and take a huge leap towards the future. Join us in Riyadh to explore the future of banking in alignment with Vision 2030.',
            'overview' => 'An exciting and timely conference discussing the future of the financial industry in KSA driven by innovation and digital advancements, with the adoption of technologies such as AI, digital transformation, digital banking, intelligent automation, and more.',
            'start_date' => '2023-09-11',
            'end_date' => '2023-09-12',
            'venue' => 'Riyadh Marriott Hotel',
            'location' => 'Riyadh, Saudi Arabia',
            'website_url' => 'www.ksa.futurebanksummit.com',
            'primary_color' => '#1e3a5f',
            'secondary_color' => '#f59e0b',
            'expected_attendees' => 350,
            'speakers_count' => 18,
            'organizations_count' => 100,
            'is_featured' => true,
            'is_active' => false,
            'stats' => [
                'delegates' => '350+',
                'speakers' => '18+',
                'banks_represented' => '25+',
                'fintechs' => '40+',
            ],
            'why_attend' => 'The 4th Annual Future Banks Summit KSA 2023 will highlight the enabling role of digitalization in reshaping the future of banking. Delegates will experience a power-packed agenda from globally and regionally renowned speakers.

- Gain knowledge and insights from top industry leaders and experts from across the globe
- Network with industry peers in a solution-oriented environment
- Discuss significant partnerships and collaborations with industry leaders',
            'why_sponsor' => 'Future Banks Summit KSA 2023 presents the perfect opportunity for solution providers to engage with key decision makers from leading banks in KSA to showcase your innovative solutions aligned with Vision 2030.',
            'contact_email' => 'info@futurebanksummit.com',
            'contact_phone' => '+966 11 xxx xxxx',
        ]);

        // Future Banks Topics
        $bankTopics = [
            'VISION 2030 - Emergence of the Kingdom as a Global Financial Leader',
            'Digital Transformation - The Foundational Platform for Business Agility',
            'Payments Today & Tomorrow - The Future of Digital Payments',
            'Providing a Next-Gen Seamless Banking Customer Experience',
            'Data & Analytics Providing a 360° Overview',
            'Inclusive Banking Through Open Banking',
            'The Cloud Imperative for Business Agility',
            'The Future of NBFIs - Revolutionizing the Money Market',
            'Digital Only Banks - The Rise of Invisible Banks for Gen-Z',
            'Experiential Banking in Metaverse - Third World Banking',
        ];

        foreach ($bankTopics as $index => $topic) {
            Topic::create([
                'event_id' => $bankEvent->id,
                'title' => $topic,
                'order' => $index,
            ]);
        }

        // Future Banks Speakers
        $bankSpeakers = [
            ['name' => 'Dr. Abdullah Al-Zamil', 'title' => 'Chief Digital Officer', 'company' => 'Saudi National Bank'],
            ['name' => 'Rania Al-Mashat', 'title' => 'Head of Digital Banking', 'company' => 'Riyad Bank'],
            ['name' => 'Mohammed Bin Saleh', 'title' => 'CTO', 'company' => 'Al Rajhi Bank'],
            ['name' => 'Sarah Johnson', 'title' => 'VP Innovation', 'company' => 'SAMA'],
        ];

        foreach ($bankSpeakers as $index => $speaker) {
            Speaker::create([
                'event_id' => $bankEvent->id,
                'name' => $speaker['name'],
                'title' => $speaker['title'],
                'company' => $speaker['company'],
                'order' => $index,
            ]);
        }

        $bankEvent->industries()->attach(Industry::whereIn('name', [
            'Banking & Finance', 'Fintech', 'Technology', 'Government', 'Insurance'
        ])->pluck('id'));
    }
}