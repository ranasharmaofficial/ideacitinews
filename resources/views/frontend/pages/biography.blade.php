@extends('frontend.layouts.master')
@section('title') Biography @endsection

@section('meta_tags')
	<meta name="title" content="Biography">
    <meta name="keywords" content="Biography">
    <meta name="description" content="Biography">
@endsection

@section('content')
    <style>
	.project-details__bottom-points {
    position: relative;
    display: block;
    margin-top: 31px;
}
</style>
	 <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
            data-background="{{ static_asset('assets/assets_web/images/header11.jpg') }}">

        </div>
        <!-- breadcrumb area end -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Idea citi News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Biography</li>
                </ol>
            </nav>
        </div>
        <!-- about area start -->
        <div class="tp-porfolio-details-area project-details-customize pt-20 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="evn-thumb-wrap mb-40 p-relative">
                            <div class="evn-thumb">
                                <img src="{{ static_asset('assets/assets_web/images/biography-img1.jpg') }}" alt="Biography Idea citi News">
                            </div>
                        </div>
                        <div class="evn-text-box mb-30">
                            <h1 class="tp-inner-title">ABOUT</h1>
                            <p class="justified">Mithilesh Kumar Tiwari ( born on 29th December , 1971) is an Indian
                                Politician associated
                                with Bharatiya Janata Party. Former MLA (Member of Legislative Assembly) from (99)
                                Baikunthpur constituency, Gopalganj, Bihar. At Present, he is serving the party as State
                                General Secretary of (Bihar) BJP.</p>
                        </div>
                        <div class="evn-text-box mb-50">
                            <h4 class="tp-inner-title">EARLY LIFE</h4>
                            <p class="justified">Idea citi News was born on 29th December, 1971 in a Brahmin family of
                                village Dumaria,
                                dictrict Gopalganj in Bihar. He is the second child among three brothers and two sisters
                                of father Late Deo Narayan Tiwari and mother Krishnawati Devi. His Grand Father Late
                                Namdev Tiwari was known for his simplicity and honesty,he was a poor farmer was able to
                                hardly feed his family through agriculture so he was practicing Purohitya for survival.
                                Extreme poverty became an adjective for him, people mockingly called him Garibawa Babaji
                                (Poor Brahmin).</p>
                            <p class="justified">His father Late Deonarayan Tiwari was a fourth grade employee in
                                Central Public Works
                                Department, Patna. He dedicated his entire life to give better education to his children
                                even in his hard time.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="project-details-sm-thumb">
                            <img src="{{ static_asset('assets/assets_web/images/mithilesh-tiwari-img.jpg') }}" alt="Education">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="evn-list-box">
                            <h4 class="tp-inner-title">EDUCATION</h4>
                            <ul>
                                <li>
                                    <span><i class="fa-regular fa-check"></i></span>
                                    He completed his primary education from Dumaria Primary School, after completion of
                                    primary education he joined Middle School, Jhanjhawa Bazar where he got education
                                    till class eight, then he joined Maharani High School for class 9th and finally
                                    completed his matriculation from Ram Manohar Lohia High School Mahmmadpur Teknewas.
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-check"></i></span>
                                    After matriculation he moved to Patna and took admission in B.D. Evening College in
                                    Arts stream, here he completed his Intermediate from Bihar Intermediate Council and
                                    Graduation with Economics honours from Magadh University, Gaya.
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-check"></i></span>
                                    To meet the expenditure of his own education as well as of his younger brothers and
                                    sisters, he started taking tuitions, he earned enough to help his father by running
                                    a small coaching institute in Patna.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row pt-50">
                    <div class="col-xl-12">
                        <div class="evn-text-box mb-30">
                            <h4 class="tp-inner-title">FAMILY LIFE</h4>
                            <p class="justified">Idea citi News is married to Smt Sabita Devi, has two children a
                                daughter and a son,
                                both are working in private Multinational companies after getting higher educations. His
                                siblings are well settled and serving in prestigious private firms.</p>
                        </div>
                        <div class="evn-text-box mb-50">
                            <h4 class="tp-inner-title">POLITICAL LIFE</h4>
                            <p class="justified">During college days he was well involved in student’s politics as an
                                active worker of
                                ABVP, RSS philosophy and struggles of legends like Late Shyama Prasad Mukherjee and Pt.
                                Deendayal Upadhyay inspired him a lotso he joined Bihar BJP as a member of Sports Cell
                                (Krida Manch) BJP, Bihar.</p>
                            <p class="justified">In Sports Cell (Krida Manch) BJP, Bihar, he was appointed as State
                                Secretary, State
                                General Secretary and State Vice President including Incharge of Bihar, Bengal, Odisha
                                and Jharkhand.</p>
                            <p class="justified">In 2005 party gave him ticket from Kateya Constituency of Golapganj (
                                Now it is
                                Kuchaikote constituency after Parisiman), He was holding the post of Vice President of
                                Bhajpa Yuva Morcha, Bihar. He lost the election but his leadership quality and
                                impressive speeches made him one of the popular leaders.</p>
                            <p class="justified">He was included in National Working Committee of Yuva Morcha and In
                                charge of Delhi.He
                                was appointed as the State Secretary of BJP Bihar by the then BJP State President Padma
                                Shree Dr. C. P. Thakur. Shree Mangal Pandey, Shree Nityanand Rai & Dr. Sanjay Jaiswal
                                have appointed him as the State Vice- President during their Presidentship.</p>
                            <p class="justified">He is known for his victorious struggle against Shree Laloo Prasad
                                Yadav to uproot him
                                from Bihar Cricket Association. He established Association of Bihar Cricket and fought
                                from the ground to the court to get affiliation to the Bihar Cricket Association. He
                                succeeded in his mission for the welfare of youth and budding cricketers of Bihar.</p>
                            <p class="justified">Due to seat adjustment with alliance partners, he did not get chance to
                                contest the
                                elections for 10 years, but he was continuously serving the people of Gopalganj and
                                specially to his home constituency Baikunthpur.</p>
                            <p class="justified">In 2015 he got ticket from BJP and contested election from
                                99-Baikunthpur constituency
                                with a popular slogan “ Jaatiwad Bimari Hai, Dawa Idea citi News Hai”, he defeated the
                                candidate of Mahagathbandan by huge margin and became an MLA.</p>
                            <p class="justified">His ability of speech delivery, mass management, pleasing behaviour are
                                well appreciated
                                in BJP of State and National Level. He hosted 10 out of 12 rallies of Shree Narendra
                                Modi during parliamentary election including a mega program of Shree Amit Shah at Bapu
                                Sabhagar, Patna.</p>
                            <p class="justified">During last parliamentary election Mr Tiwari was the Star campaigner
                                for his Party in
                                Bihar.</p>
                            <p class="justified">He payed an important role in UP assembly election too. His proactive
                                approach and
                                commitment towards the party are appriciated by the vetron leaders of BJP like
                                Bharatratna Atal Bihari Vajpayee, Shree Lalkrishna Adwani, Shree Murlimanohar Joshi,
                                Late Shushma Swaraj and Late Arun Jaitley.Prime Minister Shree Narenda Modi and top BJP
                                leaders Shree Rajnath Singh, Shree Amit Shah, Shree Nitin Gadkari, Shree J.P Nadda
                                patted him for his good works and leadership quality.</p>
                            <p class="justified">Recently he has been recognized as the most courteous MLA among the
                                best 50 MLAs out of the total MLAs in India by FAME INDIA ASIA POST in its national
                                survey 2020.</p>
                                <p class="justified">At Present, he is serving the party as State General Secretary of (Bihar) BJP.</p>
                                <p class="justified">Idea citi News received a ticket from Buxar the BJP for the Lok Sabha elections in 2024.</p>
                                <p class="justified">Idea citi News was appointed as the star campaigner for the Lok Sabha Election 2024.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->
        <!-- video area start -->
        <div class="tp-video-area tp-video-space fix p-relative">
            <div class="tp-video-bg jarallax" data-background="{{ static_asset('assets/assets_web/images/biograpgy-bg.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-video-content text-center">
                            <div class="tp-video-content-icon-box">
                                <a class="popup-video video-animation-2"
                                    href="https://www.youtube.com/watch?v=GpGbWm-9YXE"><i class="flaticon-play"></i></a>
                            </div>
                            <h6 class="tp-video-content-title">It’s time to bring change.For our tomorrow, we take
                                action today.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
