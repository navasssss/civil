<!DOCTYPE html>
<html class='ltr' dir='ltr' lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b'
      xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
      <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
      <meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes'
            name='viewport' />
      <title>The Evident | Monthly Magazine</title>
      <link href='//fonts.gstatic.com' rel='dns-prefetch' />
      <link href='//dnjs.cloudflare.com' rel='dns-prefetch' />


      <link href="<?php echo e(asset('favicon.ico')); ?>" rel='icon' type='image/x-icon' />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

      <meta name="description"
            content="The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah." />
      <meta property="og:locale" content="en" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="The Evident – English Monthly Magazine" />
      <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
      <meta property="og:description"
            content="Published by the Department of Civilizational Studies, Darul Hasanath Islamic College, The Evident covers religion, theology, philosophy, history, and Muslim culture." />
      <meta property="og:site_name" content="The Evident Magazine" />
      <meta property="og:image" content="<?php echo e(asset('logocolor.png')); ?>" />

      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="The Evident – English Monthly Magazine" />
      <meta name="twitter:description"
            content="From faith to philosophy, The Evident reflects the intellectual and spiritual heritage of the Muslim Ummah." />
      <meta name="twitter:image" content="<?php echo e(asset('logocolor.png')); ?>" />

      
      <!-- Google Font Poppins -->
      <link as='style' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap'
            rel='stylesheet' />

      <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>

<body class='home multiple hasIE hasTE'>
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
                                          id='ContactForm1_contact-form-email-message' name='email-message'
                                          placeholder='Message*' rows='5'></textarea>
                                    <input class='contact-form-button contact-form-button-submit'
                                          id='ContactForm1_contact-form-submit' type='button' value='Send' />
                                    <p class='contact-form-error-message' id='ContactForm1_contact-form-error-message'>
                                    </p>
                                    <p class='contact-form-success-message'
                                          id='ContactForm1_contact-form-success-message'></p>
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

                              darkLogo: "<?php echo e(asset('logodark1.png')); ?>",

                        }
                  </script>
            </div>
      </div>
      <div class='offCanvas wrapper'>
            <div class='offCanvas-inner'>
                  <div class='canvas-1 section' id='canvas-1' name='offCanvas [mobile]'>

                        
                        <div class='widget LinkList' data-version='2' id='LinkList5'>
                              <ul class='list' role='navigation'>
                                    <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                    <a href='<?php echo e(route('category.show', $category->term)); ?>'><?php echo e(ucfirst(trim($category->term))); ?>

                                                                    </a>

                                                            </li>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href='<?php echo e(route('about')); ?>'>ABOUT US</a></li>
                                    <li><a href='<?php echo e(route('contact')); ?>'>CONTACT</a></li>
                              </ul>
                        </div>
                  </div>
                  <div class='canvas-2 sidebar section' id='canvas-2' name='offCanvas [global]'>
                        

                        <div class='widget Image' data-version='2' id='Image1'>
                              <div class='widget-content hasLogo'>
                                    <a class='logo' href='<?php echo e(url('/')); ?>'>
                                          <img alt='The Evident' height='84' id='Image1_img'
                                                src='<?php echo e(asset('logocolor1.png')); ?>' width='132' />
                                    </a>
                                    <ul data-option='{"phone": "+91 95442 00467","email": "civilizationhasanath@gmail.com", "location": "Niduvat, Kannadiparamba, P. O. Narath Kannur District, Kerala, India"}'>
                                          
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
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='1' y='1'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='1' y='11'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='11' y='1'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='11' y='11'></rect>
                                                      </svg>
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                              <div class='widget Header' data-version='2' id='Header1'>
                                    <a class='logo' href='<?php echo e(url('/')); ?>'>
                                          <img alt='The Evident' height='84' src='<?php echo e(asset('logocolor1.png')); ?>'
                                                title='The Evident' width='132' />
                                    </a>
                              </div>
                              <div class='widget LinkList' data-version='2' id='LinkList1'>
                                    <ul class='cloud' role='navigation'>
                                          <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li>
                                                                              <a href='<?php echo e(route('category.show', $category->term)); ?>'><?php echo e(ucfirst(trim($category->term))); ?>

                                                                              </a>

                                                                    </li>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          <li><a href='<?php echo e(route('about')); ?>'>ABOUT US</a></li>
                                          <li><a href='<?php echo e(route('contact')); ?>'>CONTACT</a></li>
                                          
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
                                                      <svg fill='none' stroke='currentColor' stroke-width='3px'
                                                            viewBox='0 0 24 24'>
                                                            <g transform='translate(2.000000, 2.000000)'>
                                                                  <circle cx='9.76659044' cy='9.76659044' r='8.9885584'>
                                                                  </circle>
                                                                  <line x1='16.0183067' x2='19.5423342' y1='16.4851259'
                                                                        y2='20.0000001'></line>
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
                  <div class='layout-1 layout section' id='layout-1' name='Layout 1'>
                        <div class='widget HTML' data-version='2' id='HTML2'>
                              <div class='widget-content' data-fetch='slider-2[slide]6'>
                                    <span class='loader'><i></i><i></i><i></i><i></i></span>
                              </div>
                        </div>
                        <div class='widget HTML' data-version='2' id='HTML1'>
                              <div class='widget-heading'>
                                    <h3 class='title'>
                                          Latest Editions
                                    </h3>
                              </div>
                              <div class='widget-content' data-fetch='slider-5[slide]3'>
                                    <span class='loader'><i></i><i></i><i></i><i></i></span>
                              </div>
                        </div>
                  </div>
                  <div class='col-2'>
                        <main class='main wrapper'>
                              <div class='layout-2 layout section' id='layout-2' name='Layout 2'>
                                    <div class='widget HTML' data-version='2' id='HTML4'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Picked
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='grid-3_2[latest]5'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                                    <div class='widget HTML' data-version='2' id='HTML3'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Sub Areas
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='slider-7[slide_inpage]6'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                              </div>
                              <div class='layout-3 section' id='layout-3' name='Main Layout'>
                                    <div class='widget Blog' data-version='2' id='Blog1'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>Latest</h3><a class='viewAll' href='/search'>View
                                                      all</a>
                                          </div>
                                          <div class='widget-content grid-2 gridView'>
                                                <div class='posts'>

                                                      <?php
                                                                                    $feed = Cache::get('homepage_sections', []);
                                                                                    $postIds = $feed['latest_detailed'] ?? [];
                                                                                    $posts = \App\Models\Post::with(['author', 'category'])
                                                                                            ->whereIn('id', $postIds)
                                                                                            ->get()
                                                                                            ->sortBy(function ($post) use ($postIds) {
                                                                                                      return array_search($post->id, $postIds);
                                                                                            })->values();
                                                                              ?>
                                                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                      <article class='post postOuter item-<?php echo e($loop->index); ?>'>
                                                                                                <div class='postImage'>
                                                                                                        <a href='<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>'
                                                                                                                  title='<?php echo e($post->title); ?>'>
                                                                                                                  <span class='hasImage'
                                                                                                                          data-style="<?php echo e($post->thumbnail_url); ?>"></span>
                                                                                                        </a>
                                                                                                </div>
                                                                                                <div class='postDetails'>
                                                                                                        <span class='postCat'
                                                                                                                  data-cat="<?php echo e($post->category->term); ?>">
                                                                                                                  <a
                                                                                                                          href='<?php echo e(route('category.show', ['category' => $post->category->term])); ?>'><?php echo e($post->category->term); ?></a>
                                                                                                        </span>
                                                                                                        <h3 class='postTitle'>
                                                                                                                  <a href='<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>'
                                                                                                                          rel='bookmark' title="<?php echo e($post->title); ?>">
                                                                                                                          <?php echo e($post->title); ?>

                                                                                                                  </a>
                                                                                                        </h3>
                                                                                                        <p class='postSnippet'>
                                                                                                                  <?php echo e(Str::limit(strip_tags($post->content), 150, '...')); ?>

                                                                                                        </p>
                                                                                                        <div class='postMeta'>
                                                                                                                  <div class='postAuthorAndTimestamp'>
                                                                                                                          <span class='authorImage'>
                                                                                                                                    <span class='hasImage'
                                                                                                                                            data-style='<?php echo e($post->author->image_url); ?>'></span>
                                                                                                                          </span>
                                                                                                                          <span class='postAuthorAndDate'>
                                                                                                                                    <span class='postAuthor'>
                                                                                                                                            <?php echo e($post->author->name); ?>

                                                                                                                                    </span>
                                                                                                                                    <span class='postDate'>
                                                                                                                                            <time class='published'
                                                                                                                                                      datetime="<?php echo e($post->published_at?->toIso8601String() ?? now()->toIso8601String()); ?>"></time>
                                                                                                                                    </span>
                                                                                                                          </span>
                                                                                                                  </div>
                                                                                                                  <span class='postReadMore'><a
                                                                                                                                    href='<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>'>Keep
                                                                                                                                    reading</a></span>
                                                                                                        </div>
                                                                                                </div>
                                                                                      </article>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                      
                                                </div>
                                                <div class='blogPager' id='blogPager'>
                                                      <a class='loadMore'
                                                            data-link='https://atlas-home2.blogspot.com/search?updated-max=2022-09-07T02:42:00-07:00&amp;max-results=4'
                                                            href='#loadMore' role='button'>
                                                            More posts
                                                      </a>
                                                      <span class='loading'>Loading&hellip;
                                                            <span
                                                                  class='loader'><i></i><i></i><i></i><i></i></span></span>
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
                              <div class='layout-4 layout section' id='layout-4' name='Layout 4'>
                                    <div class='widget HTML' data-version='2' id='HTML6'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Latest
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='grid-5[wow]6'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                              </div>
                        </main>
                        <aside class='aside wrapper'>
                              <div class='sidebar-2 sidebar section' id='sidebar-2' name='Sidebar [Home]'>
                                    <div class='widget HTML' data-version='2' id='HTML7'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Picked
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='sided-1[wo2]3'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                                    <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList3'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Join us
                                                </h3>
                                          </div>
                                          <div class='widget-content'>
                                                <ul class='list hasIcons'>
                                                      <li class='hasIcon facebook'>
                                                            <a href='https://www.facebook.com/civilizationhasanath/' target='_blank'>
                                                                  Civilization Hasanath
                                                                  
                                                            </a>
                                                      </li>
                                                      <li class='hasIcon spotify'>
                                                            
                                                            <a href='https://open.spotify.com/show/3bVGzJEeanxTRLjFt3J3eQ?si=ce28f3517e5a4598' target='_blank'>
                                                                  Civilization Hasanath
                                                                  
                                                            </a>
                                                      </li>
                                                      <li class='hasIcon youtube'>
                                                            <a href='https://www.youtube.com/@civilizationhasanath' target='_blank'>
                                                                  Civilization Hasanath
                                                                  
                                                            </a>
                                                      </li>
                                                      <li class='hasIcon instagram'>
                                                            <a href='https://www.instagram.com/civilization_hasanath/' target='_blank'>
                                                                  Dept. of Civilizational Studies
                                                                  
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class='widget HTML' data-version='2' id='HTML8'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      Gadget
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='sided-3[side2]4'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                                    <div class='widget HTML' data-version='2' id='HTML9'>
                                          <div class='widget-heading'>
                                                <h3 class='title'>
                                                      LIVING
                                                </h3>
                                          </div>
                                          <div class='widget-content' data-fetch='sided-2[side]3'>
                                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                                          </div>
                                    </div>
                              </div>
                              <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'>
                              </div>
                        </aside>
                  </div>
                  <div class='layout-5 layout no-items section' id='layout-5' name='Layout 5'></div>
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
                                                      <a
                                                            href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                                </span>
                                                <div class='postImage'>
                                                      <a href='https://atlas-home2.blogspot.com/2022/09/for-good-results-must-be-make-good-plan.html'
                                                            title='For good results must be make good plan'>
                                                            <span class='hasImage'
                                                                  data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6pMKa6Ooj3KC-w4QbPdQt4y5lESXGyBL0PIvT7uRQkGt1B7pXD_iEVgYjd0Vh2uuUhxE42BfotDxx-kyTvSu9t3-pnTKvRuE-7WZdJ1TYU8mKjm1I-5IaGNwkI5lPNvit-M5Ig21Tu2dIM3MVfl7zM7kPlsXpDvhbUvU6uwKLjqIHOTYnprRcFuJTxA/w72-h72-p-k-no-nu/11.jpg'></span>
                                                      </a>
                                                </div>
                                                <div class='postDetails'>
                                                      <h3 class='postTitle'>
                                                            <a href='https://atlas-home2.blogspot.com/2022/09/for-good-results-must-be-make-good-plan.html'
                                                                  title='For good results must be make good plan'>
                                                                  For good results must be make good plan
                                                            </a>
                                                      </h3>
                                                      <div class='postMeta'>
                                                            <span class='postDate'><time class='published'
                                                                        datetime='2022-09-07T02:24:00-07:00'></time></span>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class='post item-1'>
                                                <span class='postCat' data-cat='Living'>
                                                      <a
                                                            href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
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
                                                      <a
                                                            href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                                </span>
                                                <div class='postImage'>
                                                      <a href='https://atlas-home2.blogspot.com/2022/09/for-good-results-must-be-make-good-plan.html'
                                                            title='For good results must be make good plan'>
                                                            <span class='hasImage'
                                                                  data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6pMKa6Ooj3KC-w4QbPdQt4y5lESXGyBL0PIvT7uRQkGt1B7pXD_iEVgYjd0Vh2uuUhxE42BfotDxx-kyTvSu9t3-pnTKvRuE-7WZdJ1TYU8mKjm1I-5IaGNwkI5lPNvit-M5Ig21Tu2dIM3MVfl7zM7kPlsXpDvhbUvU6uwKLjqIHOTYnprRcFuJTxA/w72-h72-p-k-no-nu/11.jpg'></span>
                                                      </a>
                                                </div>
                                                <div class='postDetails'>
                                                      <h3 class='postTitle'>
                                                            <a href='https://atlas-home2.blogspot.com/2022/09/for-good-results-must-be-make-good-plan.html'
                                                                  title='For good results must be make good plan'>
                                                                  For good results must be make good plan
                                                            </a>
                                                      </h3>
                                                      <div class='postMeta'>
                                                            <span class='postDate'><time class='published'
                                                                        datetime='2022-09-07T02:24:00-07:00'></time></span>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class='post item-1'>
                                                <span class='postCat' data-cat='Living'>
                                                      <a
                                                            href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
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
      <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'
            type='text/javascript'></script>
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
      <script src="<?php echo e(asset('timeago.js')); ?>"></script>
      <script src="<?php echo e(asset('locals.js')); ?>"></script>
      <script src="<?php echo e(asset('sticky.js')); ?>"></script>
      <script src="<?php echo e(asset('lazyload.js')); ?>"></script>
      <script src="<?php echo e(asset('submenu.js')); ?>"></script>
      <script src="<?php echo e(asset('ticker.js')); ?>"></script>
      <script src="<?php echo e(asset('currdate.js')); ?>"></script>


      <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2726972568-widgets.js"></script>
      <script src="<?php echo e(asset('neew.js')); ?>"></script>

      <script>
            document.addEventListener('DOMContentLoaded', function () {
                  const elements = document.querySelectorAll('[data-cat]');
                  const colors = {};

                  elements.forEach(el => {
                        const cat = el.getAttribute('data-cat');

                        if (!colors[cat]) {
                              // Generate a random color
                              colors[cat] = '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
                        }

                        const anchor = el.querySelector('a');
                        if (anchor) {
                              anchor.style.backgroundColor = colors[cat];
                        }
                  });
            });
      </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\civil\civil\resources\views\index.blade.php ENDPATH**/ ?>