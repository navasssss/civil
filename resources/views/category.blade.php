<!DOCTYPE html>
<html class='ltr' dir='ltr' lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b'
    xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes'
        name='viewport' />
    <title>The Evident</title>
    <link href='//fonts.gstatic.com' rel='dns-prefetch' />
    <link href='//dnjs.cloudflare.com' rel='dns-prefetch' />

    <meta content='blogger' name='generator' />
    <link href='{{ asset('favicon.ico') }}' rel='icon' type='image/x-icon' />
    <link href='{{ url()->current() }}' rel='canonical' />
    <meta
        content='Creative Magazine &amp;amp; News Blogger Premium Theme, With many new features and fully Customizble, Powerfull Admin Panel and High Quality Design.'
        name='description' />
    <link href='{{ asset('logocolor.png') }}' rel='image_src' />
    <!-- Metadata for Open Graph protocol. See http://ogp.me/. -->
    <meta content='en' property='og:locale' />
    <meta content='object' property='og:type' />
    <meta content='The Evident' property='og:title' />
    <meta content='{{ url()->current() }}' property='og:url' />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        property='og:description' />
    <meta content='The Evident' property='og:site_name' />
    <meta content='{{ asset('logocolor.png') }}' property='og:image' />
    <meta content='{{ asset('fashion-n.jpg') }}' property='twitter:image' />
    <meta content='summary_large_image' name='twitter:card' />
    <meta content='The Evident' name='twitter:title' />
    <meta content='{{ url()->current() }}' name='twitter:domain' />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        name='twitter:description' />

    <!-- Google Font Poppins -->
    <link as='style' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap'
        rel='stylesheet' />


    <meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109' />
    <meta name='google-adsense-platform-domain' content='blogspot.com' />
    <link href='{{ asset('style.css') }}' rel='stylesheet' type='text/css' />
</head>

<body class='multiple noSide hasIE hasTE' data-category='Style'>
    <div class='settings section' id='settings' name='Settings'>
        <div class='widget ContactForm' data-version='2' id='ContactForm1'>
            <div class='widget-content contact-form-widget'>
                <div class='form'>
                    <form name='contact-form'>
                        <input class='contact-form-name' id='ContactForm1_contact-form-name' name='name'
                            placeholder='Name' size='30' type='text' value='' />
                        <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
                            placeholder='Email*' size='30' type='text' value='' />
                        <textarea class='contact-form-email-message' cols='25'
                            id='ContactForm1_contact-form-email-message' name='email-message' placeholder='Message*'
                            rows='5'></textarea>
                        <input class='contact-form-button contact-form-button-submit'
                            id='ContactForm1_contact-form-submit' type='button' value='Send' />
                        <p class='contact-form-error-message' id='ContactForm1_contact-form-error-message'>
                        </p>
                        <p class='contact-form-success-message' id='ContactForm1_contact-form-success-message'></p>
                    </form>
                </div>
            </div>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList200'>
            <style>
                [data-cat] a {
                    color: white;
                    /* optional, to ensure contrast */
                    padding: 5px;
                    display: inline-block;
                    border-radius: 4px;
                }
            </style>
            <style type='text/css'>
                [data-cat=Gadget] a {
                    background-color: red
                }

                [data-cat=Gadget] a {
                    color: red
                }

                [data-type="iconList"] .list.hasIcons .linkedin a {
                    background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                }

                [data-type="iconList"] .cloud.hasIcons .linkedin a:before {
                    background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                }

                [data-type="iconList"] .cloud.hasIcons .linkedin .icon-meta {
                    color: #218fb9
                }
            </style>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList201'>
            <style type='text/css'>
                .tiktok a:before {
                    content: "\e07b"
                }

                .pinterest a:before {
                    content: "\f231"
                }

                .twitch a:before {
                    content: "\f1e8"
                }

                .github a:before {
                    content: "\f09b"
                }
            </style>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList202'>
            <script type='text/javascript'>
                var propData = {

                    darkLogo: "{{ asset('logodark1.png') }}",

                }
            </script>
        </div>
    </div>
    <div class='offCanvas wrapper'>
        <div class='offCanvas-inner'>
            <div class='canvas-1 section' id='canvas-1' name='offCanvas [mobile]'>

                {{-- <div class='widget HTML' data-version='2' id='HTML10'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Latest
                        </h3>
                    </div>
                    <div class='widget-content' data-fetch='sided-1[default]6'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div> --}}

                <div class='widget LinkList' data-version='2' id='LinkList5'>
                    <ul class='list' role='navigation'>
                        @foreach ($topCategories as $categ)
                            <li>
                                <a href='{{ route('category.show', $categ->term) }}'>{{ ucfirst(trim($categ->term)) }}</a>

                            </li>
                        @endforeach
                        <li><a href='{{ route('about') }}'>ABOUT US</a></li>
                        <li><a href='{{ route('contact') }}'>CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class='canvas-2 sidebar section' id='canvas-2' name='offCanvas [global]'>
                {{-- <div class='widget HTML' data-version='2' id='HTML10'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Latest
                        </h3>
                    </div>
                    <div class='widget-content' data-fetch='sided-1[default]6'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div> --}}

                <div class='widget Image' data-version='2' id='Image1'>
                    <div class='widget-content hasLogo'>
                        <a class='logo' href='{{ url('/') }}'>
                            <img alt='The Evident' height='84' id='Image1_img' src='{{ asset('logocolor1.png') }}'
                                width='132' />
                        </a>
                        <ul data-option='{"phone": "+34 000 0000", "location": "Hong Kong 122, Pak Road"}'>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='searchForm wrapper'>
        <span data-icon='close' role='button'></span>
        <div class='searchForm-inner'>
            <form action='/search' method='get'>
                <input autocomplete='off' name='q' placeholder='Enter keyword...' type='text' value='' />
                <input type='submit' value='Search' />
            </form>
            <div class='searchForm-results'></div>
        </div>
    </div>
    <header class='header wrapper'>
        <div class='header-inner'>
            <div class='header-mainbar-overlay'>
                <div class='header-mainbar section' id='header-mainbar' name='Header Main Bar'>
                    <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList2'>
                        <ul class='cloud' role='navigation'>
                            <li class='hasIcon grid'>
                                <a href='#' target='_blank'>
                                    <svg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7' x='1'
                                            y='1'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7' x='1'
                                            y='11'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7'
                                            x='11' y='1'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7'
                                            x='11' y='11'></rect>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class='widget Header' data-version='2' id='Header1'>
                        <a class='logo' href='{{ url('/') }}'>
                            <img alt='The Evident' height='84' src='{{ asset('logocolor1.png') }}' title='The Evident'
                                width='132' />
                        </a>
                    </div>
                    <div class='widget LinkList' data-version='2' id='LinkList1'>
                        <ul class='cloud' role='navigation'>
                            @foreach ($topCategories as $category)
                                <li>
                                    <a href='{{ route('category.show', $category->term) }}'>{{ ucfirst(trim($category->term)) }}
                                    </a>

                                </li>
                            @endforeach
                            <li><a href='{{ route('about') }}'>ABOUT US</a></li>
                            <li><a href='{{ route('contact') }}'>CONTACT</a></li>
                            {{-- <li class='hasMega'>
                                <a href='/search/label/Topics'>Topics</a>
                                <ul class='widget-content' data-fetch='mega-1[Living,Food]4'></ul>
                            </li>
                            <li class='hasMega'>
                                <a href='/search/label/Picked'>Picked</a>
                                <ul class='widget-content' data-fetch='mega-2[Gadget,Style]'></ul>
                            </li>
                            <li class='hasMega'>
                                <a href='/search/label/Style'>Style</a>
                                <ul class='widget-content' data-fetch='mega-2[Style]4'></ul>
                            </li>
                            <li>
                                <a href='#'>Explore</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_LIVING</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Education</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Style</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Parenting</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_ARTS</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Theatre</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Movies</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Music</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_SPORTS</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Football</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Tennis</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Basketball</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_CITIES</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Hong Kong</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Istanbul</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList7'>
                        <ul class='cloud' role='navigation'>
                            <li class='hasIcon twitter'>
                                <a href='#' target='_blank'>
                                    <span class='icon-meta'>30k</span>
                                </a>
                            </li>
                            <li class='hasIcon linkedin'>
                                <a href='#' target='_blank'>
                                    <span class='icon-meta'>30k</span>
                                </a>
                            </li>
                            <li class='hasIcon search'>
                                <a href='#' target='_blank'>
                                    <svg fill='none' stroke='currentColor' stroke-width='3px' viewBox='0 0 24 24'>
                                        <g transform='translate(2.000000, 2.000000)'>
                                            <circle cx='9.76659044' cy='9.76659044' r='8.9885584'>
                                            </circle>
                                            <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'>
                                            </line>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='header-childbar no-items section' id='header-childbar' name='Header Child Bar'></div>
        </div>
    </header>
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-2'>
                <main class='main wrapper'>
                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                            <div class='widget-heading'>
                                <h3 class='queryInfo queryLabel querySuccess'>{{ $category->term }}</h3>
                            </div>
                            <div class='widget-content grid-2 gridView'>
                                <div class='posts'>
                                    @foreach ($posts as $post)
                                        <article class='post postOuter item-{{ $loop->index }}'>
                                            <div class='postImage'>
                                                <a href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'
                                                    title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                                    <span class='hasImage'
                                                        data-style='{{ asset($post->thumbnail_url) }}'></span>
                                                </a>
                                            </div>
                                            <div class='postDetails'>
                                                <span class='postCat' data-cat='{{ $post->category->term ?? 'uncategorized' }}'>
                                                    <a href='{{ route('home.category', ['category' => $post->category->term ?? 'uncategorized']) }}'>{{ucwords($post->category->term)}}</a>
                                                </span>
                                                <h3 class='postTitle'>
                                                    <a href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'
                                                        rel='bookmark'
                                                        title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                                        Winter Dressing Tips When It&#39;s Really Cold Out
                                                    </a>
                                                </h3>
                                                <p class='postSnippet'>Lorem ipsum , or lipsum as it is sometimes known, is
                                                    dummy text used in laying out print, graphic or web designs. The
                                                    p&#8230;</p>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage'
                                                                data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                IW studio
                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime='2022-09-07T02:48:00-07:00'></time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <span class='postReadMore'><a
                                                            href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'>Keep
                                                            reading</a></span>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                    <article class='post postOuter item-1'>
                                        <div class='postImage'>
                                            <a href='https://atlas-home2.blogspot.com/2022/09/top-men-fashion-trends-from-spring.html'
                                                title='Top Men&#39;s Fashion Trends From Spring'>
                                                <span class='hasImage'
                                                    data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjDJmsBKXT35B0PcGpQF7nnxW9irSnHq_-a4Ej5_oGG5F9-ozVEUiGsA0uKomcCB3DoOqAOTLr5BEygSlxPQZluyXjJUfO_sBZTIVsdsPELzuBibUPEioaGvW_HjSuuo2uhuVO9JND_Jzy3T4IVXv-kfYwO4QKaaPyrf-2AKoGjE_kjXufE6462LYkw7A/w72-h72-p-k-no-nu/fashion-2%20(1).jpg'></span>
                                            </a>
                                        </div>
                                        <div class='postDetails'>
                                            <span class='postCat' data-cat='Style'>
                                                <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                            </span>
                                            <h3 class='postTitle'>
                                                <a href='https://atlas-home2.blogspot.com/2022/09/top-men-fashion-trends-from-spring.html'
                                                    rel='bookmark' title='Top Men&#39;s Fashion Trends From Spring'>
                                                    Top Men&#39;s Fashion Trends From Spring
                                                </a>
                                            </h3>
                                            <p class='postSnippet'>Lorem ipsum , or lipsum as it is sometimes known, is
                                                dummy text used in laying out print, graphic or web designs. The
                                                p&#8230;</p>
                                            <div class='postMeta'>
                                                <div class='postAuthorAndTimestamp'>
                                                    <span class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                    </span>
                                                    <span class='postAuthorAndDate'>
                                                        <span class='postAuthor'>
                                                            IW studio
                                                        </span>
                                                        <span class='postDate'>
                                                            <time class='published'
                                                                datetime='2022-09-07T02:35:00-07:00'></time>
                                                        </span>
                                                    </span>
                                                </div>
                                                <span class='postReadMore'><a
                                                        href='https://atlas-home2.blogspot.com/2022/09/top-men-fashion-trends-from-spring.html'>Keep
                                                        reading</a></span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class='post postOuter item-2'>
                                        <div class='postImage'>
                                            <a href='https://atlas-home2.blogspot.com/2022/09/laugh-cry-and-learn-within-virtual.html'
                                                title='Laugh, cry and learn Within Virtual Reality'>
                                                <span class='hasImage'
                                                    data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhdsMqgFPv37HM4GXCU2pJ1N4v2zUmXMusqU2mzT1NNzrp_ITZ4gWXkWbK1lKzPsT0XijlpqKZ95X9VEyeSHNzqAs_Qa-AtbdGR6Tu3WH9sJnC3zXTTWOBjM6xUUyBSAk1m7rNC7cYVSmcCQkTlGeU-EkB2RfnJV29eN9F-ihg8Qm87C_gEp2R0fJwwJw/w72-h72-p-k-no-nu/remy-gieling-Zf0mPf4lG-U-unsplash.jpg'></span>
                                            </a>
                                        </div>
                                        <div class='postDetails'>
                                            <span class='postCat' data-cat='Gadget'>
                                                <a
                                                    href='https://atlas-home2.blogspot.com/search/label/Gadget'>Gadget</a>
                                            </span>
                                            <h3 class='postTitle'>
                                                <a href='https://atlas-home2.blogspot.com/2022/09/laugh-cry-and-learn-within-virtual.html'
                                                    rel='bookmark' title='Laugh, cry and learn Within Virtual Reality'>
                                                    Laugh, cry and learn Within Virtual Reality
                                                </a>
                                            </h3>
                                            <p class='postSnippet'>Lorem ipsum , or lipsum as it is sometimes known, is
                                                dummy text used in laying out print, graphic or web designs. The
                                                p&#8230;</p>
                                            <div class='postMeta'>
                                                <div class='postAuthorAndTimestamp'>
                                                    <span class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                    </span>
                                                    <span class='postAuthorAndDate'>
                                                        <span class='postAuthor'>
                                                            IW studio
                                                        </span>
                                                        <span class='postDate'>
                                                            <time class='published'
                                                                datetime='2022-09-07T02:22:00-07:00'></time>
                                                        </span>
                                                    </span>
                                                </div>
                                                <span class='postReadMore'><a
                                                        href='https://atlas-home2.blogspot.com/2022/09/laugh-cry-and-learn-within-virtual.html'>Keep
                                                        reading</a></span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class='post postOuter item-3'>
                                        <div class='postImage'>
                                            <a href='https://atlas-home2.blogspot.com/2022/09/tips-to-ensure-you-always-look-stylish.html'
                                                title='Tips to Ensure You Always Look Stylish'>
                                                <span class='hasImage'
                                                    data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuMhJbYPWfqPhAJpwBtq_2B7myBD0egdQDwzJeuu8XwqTTwgjOda_Y1SgWf3-BWGWSJWEkN6wjIsYyXUQmAdVDmla-duP5xuVbGGqncxgxNXUJ9UjVHCdCw9f3hoDAe0qG-8tCnEVV-qtPbeAVfkCDri1FnL1ciPqwdo_NNHAlivgmV1_1NkhFdiIZOg/w72-h72-p-k-no-nu/angel-g-vFOxv-8mONw-unsplash.jpg'></span>
                                            </a>
                                        </div>
                                        <div class='postDetails'>
                                            <span class='postCat' data-cat='Style'>
                                                <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                            </span>
                                            <h3 class='postTitle'>
                                                <a href='https://atlas-home2.blogspot.com/2022/09/tips-to-ensure-you-always-look-stylish.html'
                                                    rel='bookmark' title='Tips to Ensure You Always Look Stylish'>
                                                    Tips to Ensure You Always Look Stylish
                                                </a>
                                            </h3>
                                            <p class='postSnippet'>Lorem ipsum , or lipsum as it is sometimes known, is
                                                dummy text used in laying out print, graphic or web designs. The
                                                p&#8230;</p>
                                            <div class='postMeta'>
                                                <div class='postAuthorAndTimestamp'>
                                                    <span class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                    </span>
                                                    <span class='postAuthorAndDate'>
                                                        <span class='postAuthor'>
                                                            IW studio
                                                        </span>
                                                        <span class='postDate'>
                                                            <time class='published'
                                                                datetime='2022-09-07T02:21:00-07:00'></time>
                                                        </span>
                                                    </span>
                                                </div>
                                                <span class='postReadMore'><a
                                                        href='https://atlas-home2.blogspot.com/2022/09/tips-to-ensure-you-always-look-stylish.html'>Keep
                                                        reading</a></span>
                                            </div>
                                        </div>
                                    </article>
                                    <article class='post postOuter item-4'>
                                        <div class='postImage'>
                                            <a href='https://atlas-home2.blogspot.com/2022/09/top-classic-style-inspiration-ideas.html'
                                                title='Top Classic Style Inspiration ideas'>
                                                <span class='hasImage'
                                                    data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhaEwu3T9Q6bFJD_AoRPCU_nIiNwqEgZ68F13d9DlNpw-163lLzY6IWOM1088_YG2LIc1qKBCzcTXG8JvH9c6JadPd7FH8W8YRUTrNPxovKW_uLtYtWOmmmHsIL7hEclH2Pg01SbgSrpavY1zh25-JOLmD3JM58v_BD9hXA3OKaGoqJqT_WjL2GiYo13w/w72-h72-p-k-no-nu/23%20(1).jpg'></span>
                                            </a>
                                        </div>
                                        <div class='postDetails'>
                                            <span class='postCat' data-cat='Style'>
                                                <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                            </span>
                                            <h3 class='postTitle'>
                                                <a href='https://atlas-home2.blogspot.com/2022/09/top-classic-style-inspiration-ideas.html'
                                                    rel='bookmark' title='Top Classic Style Inspiration ideas'>
                                                    Top Classic Style Inspiration ideas
                                                </a>
                                            </h3>
                                            <p class='postSnippet'>Lorem ipsum , or lipsum as it is sometimes known, is
                                                dummy text used in laying out print, graphic or web designs. The
                                                p&#8230;</p>
                                            <div class='postMeta'>
                                                <div class='postAuthorAndTimestamp'>
                                                    <span class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                    </span>
                                                    <span class='postAuthorAndDate'>
                                                        <span class='postAuthor'>
                                                            IW studio
                                                        </span>
                                                        <span class='postDate'>
                                                            <time class='published'
                                                                datetime='2022-09-07T02:18:00-07:00'></time>
                                                        </span>
                                                    </span>
                                                </div>
                                                <span class='postReadMore'><a
                                                        href='https://atlas-home2.blogspot.com/2022/09/top-classic-style-inspiration-ideas.html'>Keep
                                                        reading</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class='blogPager' id='blogPager'>
                                    <a class='loadMore'
                                        data-link='https://atlas-home2.blogspot.com/search/label/Style?updated-max=2022-09-07T02:18:00-07:00&amp;max-results=20&amp;start=20&amp;by-date=false'
                                        href='#loadMore' role='button'>
                                        More posts
                                    </a>
                                    <span class='loading'>Loading&hellip;
                                        <span class='loader'><i></i><i></i><i></i><i></i></span></span>
                                    <span class='noMore'>
                                        That's All

                                    </span>
                                </div>
                                <script type='text/javascript'>
                                    var postMeta = { date: !0, author: !0 }
                                </script>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class='aside wrapper'>
                    <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'></div>
                </aside>
            </div>
        </div>
    </div>
    <footer class='footer wrapper'>
        <div class='footer-inner'>
            <div class='footer-columns section' id='footer-columns' name='Footer Columns'>
                <div class='widget PopularPosts' data-version='2' id='PopularPosts2'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Daily
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <div class='posts'>
                            <div class='post item-0'>
                                <span class='postCat' data-cat='Living'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                        title='Will Humans be able to live in Mars in the future?'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w72-h72-p-k-no-nu/Highcompressed_2057696496.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                            title='Will Humans be able to live in Mars in the future?'>
                                            Will Humans be able to live in Mars in the future?
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:51:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                            <div class='post item-1'>
                                <span class='postCat' data-cat='Style'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                        title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w72-h72-p-k-no-nu/fashion-n.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                            title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                            Winter Dressing Tips When It&#39;s Really Cold Out
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:48:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget PopularPosts' data-version='2' id='PopularPosts1'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Weekly
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <div class='posts'>
                            <div class='post item-0'>
                                <span class='postCat' data-cat='Living'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                        title='Will Humans be able to live in Mars in the future?'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w72-h72-p-k-no-nu/Highcompressed_2057696496.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                            title='Will Humans be able to live in Mars in the future?'>
                                            Will Humans be able to live in Mars in the future?
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:51:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                            <div class='post item-1'>
                                <span class='postCat' data-cat='Style'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                        title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w72-h72-p-k-no-nu/fashion-n.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                            title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                            Winter Dressing Tips When It&#39;s Really Cold Out
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:48:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget PageList' data-version='2' id='PageList1'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Pages
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <ul class='list'>
                            <li>
                                <a href='http://atlas-he2.blogspot.com/'>Home</a>
                            </li>
                            <li>
                                <a href='#'>Typography</a>
                            </li>
                            <li>
                                <a href='#'>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='footer-bottombar section' id='footer-bottombar' name='Footer Bottom Bar'>
                <div class='widget Text' data-version='2' id='Text1'>
                    All Rights Reserved by Atlas &#169; 2022
                </div>
                <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList4'>
                    <ul class='cloud'>
                        <li class='hasIcon facebook'>
                            <a href='#' target='_blank'>
                            </a>
                        </li>
                        <li class='hasIcon github'>
                            <a href='#' target='_blank'>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class='content-ads'>
    </div>
    <div class='sticky-bar'>
        <div class='sticky-list section' id='sticky-list' name='Sticky Bar'>
            <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList6'>
                <ul class='cloud'>
                    <li class='hasIcon dark'>
                        <a href='#' target='_blank'>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <span class='hasIcon totop'>
            <a href='#toTop'></a>
        </span>
    </div>
    <!-- Libraries -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' type='text/javascript'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' type='text/javascript'></script>
    <!-- Custom data -->
    <script type='text/javascript'>
        var customData = {
            stickyHead: !0,
            stickyCols: !0,
            viewAll: "View all",
            noResults: "No results found",
            noTitle: "No title",
            readMore: "Keep reading",
            lnDir: !1,
            lang: "en"
        }
    </script>
    <!-- Main Script -->
    <script src="{{ asset('timeago.js') }}"></script>
    <script src="{{ asset('locals.js') }}"></script>
    <script src="{{ asset('sticky.js') }}"></script>
    <script src="{{ asset('lazyload.js') }}"></script>
    <script src="{{ asset('submenu.js') }}"></script>
    <script src="{{ asset('ticker.js') }}"></script>
    <script src="{{ asset('currdate.js') }}"></script>


    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3000588928-widgets.js"></script>
    <script type='text/javascript'>
        window['__wavt'] = 'AOuZoY6_19SQuFdSmqNEjbJn_6hqMaug9Q:1753894518229'; _WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6110379639549342881', '//atlas-home2.blogspot.com/search/label/Style', '6110379639549342881');
        _WidgetManager._SetDataContext([{ 'name': 'blog', 'data': { 'blogId': '6110379639549342881', 'title': 'Atlas - home 2', 'url': 'https://atlas-home2.blogspot.com/search/label/Style', 'canonicalUrl': 'https://atlas-home2.blogspot.com/search/label/Style', 'homepageUrl': 'https://atlas-home2.blogspot.com/', 'searchUrl': 'https://atlas-home2.blogspot.com/search', 'canonicalHomepageUrl': 'https://atlas-home2.blogspot.com/', 'blogspotFaviconUrl': 'https://atlas-home2.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Atlas - home 2 - RSS\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/6110379639549342881/posts/default\x22 /\x3e\n', 'meTag': '', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/3f6b3721b20e96c4', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'interstitialAccepted': false, 'sharing': { 'platforms': [{ 'name': 'Get link', 'key': 'link', 'shareMessage': 'Get link', 'target': '' }, { 'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Share to Facebook', 'target': 'facebook' }, { 'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog' }, { 'name': 'X', 'key': 'twitter', 'shareMessage': 'Share to X', 'target': 'twitter' }, { 'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Share to Pinterest', 'target': 'pinterest' }, { 'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email' }], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en\x27};\x3c/script\x3e' }, 'hasCustomJumpLinkMessage': true, 'jumpLinkMessage': 'Latest', 'pageType': 'index', 'searchLabel': 'Style', 'pageName': 'Style', 'pageTitle': 'Atlas - home 2: Style' } }, { 'name': 'features', 'data': {} }, { 'name': 'messages', 'data': { 'edit': 'Edit', 'linkCopiedToClipboard': 'Link copied to clipboard!', 'ok': 'Ok', 'postLink': 'Post Link' } }, { 'name': 'template', 'data': { 'name': 'custom', 'localizedName': 'Custom', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true } }, { 'name': 'view', 'data': { 'classic': { 'name': 'classic', 'url': '?view\x3dclassic' }, 'flipcard': { 'name': 'flipcard', 'url': '?view\x3dflipcard' }, 'magazine': { 'name': 'magazine', 'url': '?view\x3dmagazine' }, 'mosaic': { 'name': 'mosaic', 'url': '?view\x3dmosaic' }, 'sidebar': { 'name': 'sidebar', 'url': '?view\x3dsidebar' }, 'snapshot': { 'name': 'snapshot', 'url': '?view\x3dsnapshot' }, 'timeslide': { 'name': 'timeslide', 'url': '?view\x3dtimeslide' }, 'isMobile': false, 'title': 'Atlas - home 2', 'description': 'Creative Magazine \x26amp; News Blogger Premium Theme, With many new features and fully Customizble, Powerfull Admin Panel and High Quality Design.', 'url': 'https://atlas-home2.blogspot.com/search/label/Style', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': false, 'isArchive': false, 'isSearch': true, 'isLabelSearch': true, 'search': { 'label': 'Style', 'resultsMessage': 'Showing posts with the label Style', 'resultsMessageHtml': 'Showing posts with the label \x3cspan class\x3d\x27search-label\x27\x3eStyle\x3c/span\x3e' } } }, { 'name': 'widgets', 'data': [{ 'title': 'Contact Form', 'type': 'ContactForm', 'sectionId': 'settings', 'id': 'ContactForm1' }, { 'title': 'Color filter', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList200' }, { 'title': 'Web Icons', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList201' }, { 'title': 'Custom Data', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList202' }, { 'title': '', 'type': 'Image', 'sectionId': 'canvas-1', 'id': 'Image1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'canvas-1', 'id': 'LinkList5' }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'canvas-2', 'id': 'HTML10' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList2' }, { 'title': 'Atlas - home 2 (Header)', 'type': 'Header', 'sectionId': 'header-mainbar', 'id': 'Header1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList7' }, { 'title': '', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML2' }, { 'title': 'Food', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML1' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML4' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML3' }, { 'title': 'Blog Posts', 'type': 'Blog', 'sectionId': 'layout-3', 'id': 'Blog1', 'posts': [{ 'id': '1972980359283242147', 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w640-h426/fashion-n.jpg', 'showInlineAds': false }, { 'id': '7135916701540421164', 'title': 'Top Men\x26#39;s Fashion Trends From Spring', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjDJmsBKXT35B0PcGpQF7nnxW9irSnHq_-a4Ej5_oGG5F9-ozVEUiGsA0uKomcCB3DoOqAOTLr5BEygSlxPQZluyXjJUfO_sBZTIVsdsPELzuBibUPEioaGvW_HjSuuo2uhuVO9JND_Jzy3T4IVXv-kfYwO4QKaaPyrf-2AKoGjE_kjXufE6462LYkw7A/w640-h426/fashion-2%20(1).jpg', 'showInlineAds': false }, { 'id': '7580919520148211545', 'title': 'Laugh, cry and learn Within Virtual Reality', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhdsMqgFPv37HM4GXCU2pJ1N4v2zUmXMusqU2mzT1NNzrp_ITZ4gWXkWbK1lKzPsT0XijlpqKZ95X9VEyeSHNzqAs_Qa-AtbdGR6Tu3WH9sJnC3zXTTWOBjM6xUUyBSAk1m7rNC7cYVSmcCQkTlGeU-EkB2RfnJV29eN9F-ihg8Qm87C_gEp2R0fJwwJw/w640-h428/remy-gieling-Zf0mPf4lG-U-unsplash.jpg', 'showInlineAds': false }, { 'id': '7235331424869781564', 'title': 'Tips to Ensure You Always Look Stylish', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuMhJbYPWfqPhAJpwBtq_2B7myBD0egdQDwzJeuu8XwqTTwgjOda_Y1SgWf3-BWGWSJWEkN6wjIsYyXUQmAdVDmla-duP5xuVbGGqncxgxNXUJ9UjVHCdCw9f3hoDAe0qG-8tCnEVV-qtPbeAVfkCDri1FnL1ciPqwdo_NNHAlivgmV1_1NkhFdiIZOg/w426-h640/angel-g-vFOxv-8mONw-unsplash.jpg', 'showInlineAds': false }, { 'id': '6929964554576534634', 'title': 'Top Classic Style Inspiration ideas', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhaEwu3T9Q6bFJD_AoRPCU_nIiNwqEgZ68F13d9DlNpw-163lLzY6IWOM1088_YG2LIc1qKBCzcTXG8JvH9c6JadPd7FH8W8YRUTrNPxovKW_uLtYtWOmmmHsIL7hEclH2Pg01SbgSrpavY1zh25-JOLmD3JM58v_BD9hXA3OKaGoqJqT_WjL2GiYo13w/w640-h480/23%20(1).jpg', 'showInlineAds': false }], 'headerByline': { 'regionName': 'header1', 'items': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }] }, 'footerBylines': [{ 'regionName': 'footer1', 'items': [{ 'name': 'comments', 'label': 'IWstudio' }] }, { 'regionName': 'footer2', 'items': [{ 'name': 'labels', 'label': '' }] }], 'allBylineItems': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }, { 'name': 'comments', 'label': 'IWstudio' }, { 'name': 'labels', 'label': '' }] }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'layout-4', 'id': 'HTML6' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-1', 'id': 'HTML5' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML7' }, { 'title': 'Join us', 'type': 'LinkList', 'sectionId': 'sidebar-2', 'id': 'LinkList3' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML8' }, { 'title': 'LIVING', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML9' }, { 'title': 'Daily', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts2', 'posts': [{ 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }, { 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }] }, { 'title': 'Weekly', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts1', 'posts': [{ 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }, { 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }] }, { 'title': 'Pages', 'type': 'PageList', 'sectionId': 'footer-columns', 'id': 'PageList1' }, { 'title': '', 'type': 'Text', 'sectionId': 'footer-bottombar', 'id': 'Text1' }, { 'title': 'Quotes', 'type': 'LinkList', 'sectionId': 'footer-bottombar', 'id': 'LinkList4' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'sticky-list', 'id': 'LinkList6' }] }]);
        _WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'settings', document.getElementById('ContactForm1'), { 'contactFormMessageSendingMsg': 'Sending...', 'contactFormMessageSentMsg': 'Your message has been sent.', 'contactFormMessageNotSentMsg': 'Message could not be sent. Please try again later.', 'contactFormInvalidEmailMsg': 'A valid email address is required.', 'contactFormEmptyMessageMsg': 'Message field cannot be empty.', 'title': 'Contact Form', 'blogId': '6110379639549342881', 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'contactFormToken': 'AOuZoY64Q6xv_A925ahiwR5aLkCX7VSECQ:1753894518229', 'submitUrl': 'https://www.blogger.com/contact-form.do' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList200', 'settings', document.getElementById('LinkList200'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList201', 'settings', document.getElementById('LinkList201'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList202', 'settings', document.getElementById('LinkList202'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_ImageView', new _WidgetInfo('Image1', 'canvas-1', document.getElementById('Image1'), { 'resize': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList5', 'canvas-1', document.getElementById('LinkList5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML10', 'canvas-2', document.getElementById('HTML10'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'header-mainbar', document.getElementById('LinkList2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header-mainbar', document.getElementById('Header1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList1', 'header-mainbar', document.getElementById('LinkList1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList7', 'header-mainbar', document.getElementById('LinkList7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'layout-1', document.getElementById('HTML2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'layout-1', document.getElementById('HTML1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML4', 'layout-2', document.getElementById('HTML4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'layout-2', document.getElementById('HTML3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'layout-3', document.getElementById('Blog1'), { 'cmtInteractionsEnabled': false, 'navMessage': 'Showing posts with label \x3cb\x3eStyle\x3c/b\x3e. \x3ca href\x3d\x22https://atlas-home2.blogspot.com/\x22\x3eShow all posts\x3c/a\x3e', 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/249874-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/123180807-lightbox_bundle.css' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML6', 'layout-4', document.getElementById('HTML6'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML5', 'sidebar-1', document.getElementById('HTML5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML7', 'sidebar-2', document.getElementById('HTML7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList3', 'sidebar-2', document.getElementById('LinkList3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML8', 'sidebar-2', document.getElementById('HTML8'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML9', 'sidebar-2', document.getElementById('HTML9'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts2', 'footer-columns', document.getElementById('PopularPosts2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'footer-columns', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList1', 'footer-columns', document.getElementById('PageList1'), { 'title': 'Pages', 'links': [{ 'isCurrentPage': false, 'href': 'http://atlas-he2.blogspot.com/', 'title': 'Home' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Typography' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Contact us' }], 'mobile': false, 'showPlaceholder': true, 'hasCurrentPage': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_TextView', new _WidgetInfo('Text1', 'footer-bottombar', document.getElementById('Text1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList4', 'footer-bottombar', document.getElementById('LinkList4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList6', 'sticky-list', document.getElementById('LinkList6'), {}, 'displayModeFull'));
    </script>
</body>

</html>