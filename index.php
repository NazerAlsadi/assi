<!doctype html>
<html lang="ar">

  <head>
      <?php
        include('head.html');
      ?>
  </head>
  
    
  <body id="index" class="lang-ar lang-rtl country-nl currency-eur layout-full-width page-index tax-display-enabled fullwidth lightmode 0">

    <main>
      
      <header id="header">
        
        <div class="headertbnr text-xs-center">
          <div class="container">
            <div class="row">
              
            </div>
          </div>
        </div>

        <div class="header-top">
            <div class="row htop">
              <div class="col-md-4 headtleft hidden-md-down"><div id="_desktop_language_selector" class="d-inline-block hidden-md-down">
              <div class="language-selector-wrapper">
                    <div class="language-selector dropdown js-dropdown">
                  <button data-toggle="dropdown" class="hidden-md-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="اللغة"> 
                            <span class="expand-more text-capitalize">اللغة العربية</span>
                    <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-left hidden-md-down" aria-labelledby="language-selector-label">
                              <li >
                        <a href="https://alaseel.nl/en/" class="dropdown-item"><img class="lang-flag" src="assets/img/1.jpg"/> English</a>
                      </li>
                              <li >
                        <a href="https://alaseel.nl/nl/" class="dropdown-item"><img class="lang-flag" src="assets/img/2.jpg"/> Nederlands</a>
                      </li>
                              <li  class="current" >
                        <a href="https://alaseel.nl/ar/" class="dropdown-item"><img class="lang-flag" src="assets/img/3.jpg"/> اللغة العربية</a>
                      </li>
                          </ul>
                  <select class="link hidden-lg-up" aria-labelledby="language-selector-label">
                              <option value="https://alaseel.nl/en/">English</option>
                              <option value="https://alaseel.nl/nl/">Nederlands</option>
                              <option value="https://alaseel.nl/ar/" selected="selected">اللغة العربية</option>
                          </select>
                  <i class="fa fa-angle-down hidden-lg-up"></i>
                </div>
              </div>
            </div>
        </div>




         <div class="col-md-4 col-xs-12 hidden-md-down text-xs-center" id="_desktop_logo">
                      <h1>
              <a href="https://alaseel.nl/">
                <img class="logo img-responsive center-block" src="assets/img/logo-1684417673.jpg" alt="Alaseel BV">
              </a>
            </h1>
                    </div>
		 

                <div class="col-md-4 col-sm-12 col-xs-12 text-xs-right tright">
      <div class="mobile">
       <div class="float-xs-left hidden-lg-up">
    <div id="menu-icon">
    <div class="navbar-header">
        <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" onclick="openNav()">
        <i class="fa fa-bars"></i></button>
    </div>
    </div>
    <div id="mySidenav" class="sidenav text-xs-left">
    <div class="close-nav">
		<div id="_mobile_language_selector" class="row hidden-lg-up"></div>
				
        <span class="categories">أصناف</span>
        <a href="javascript:void(0)" class="closebtn float-xs-right" onclick="closeNav()"><i class="fa fa-close"></i></a>
    </div>
    <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
    </div>
    </div>
    </div>
        <div class="top-logo float-xs-left hidden-lg-up" id="_mobile_logo"></div>
	<div id="_mobile_language_selector" class="float-xs-right hidden-lg-up"></div>
    <div id="_mobile_currency_selector" class="hidden-lg-up"></div>
    <div class="float-xs-right hidden-lg-up" id="_mobile_cart"></div>
    <div id="_mobile_user_info" class="float-xs-right hidden-lg-up"></div>
    <!-- Block search module TOP -->
<div class="desktop-search d-inline-block">
<div class="d-search">
	<button id="search_toggle" class="search-toggle" data-toggle="collapse" onclick="openSearch()">
           <svg width="21px" height="20px"><use xlink:href="#hsearch" /></svg>
	</button>
</div>
<div class="wbSearch" id="search_toggle_desc">
	<div id="search_block_top">
		<select id="search_category" name="search_category" class="form-control float-xs-left text-capitalize">
				<option value="all">كل الاصناف</option>
				<option value="2">الصفحة الرئيسية</option><option value="49">--مواد غذائية</option><option value="56">----حلويات</option><option value="58">----المخللات والمكدوس</option><option value="59">----خلطات غذائية</option><option value="46">----معمول بسكويت وشوكولا</option><option value="60">----صلصات دبس رمان وخل</option><option value="47">----منتجات مجمدة</option><option value="61">----ملوخية خضروات مجففة</option><option value="50">----معلبات</option><option value="62">----اجبان و البان</option><option value="51">----مواد ايرانية</option><option value="63">----الحبوب و البقوليات</option><option value="52">----موالح ومكسرات</option><option value="64">----حلاوة و طحينة</option><option value="53">----ملونات منكهات</option><option value="65">----زيتون</option><option value="54">----تمور</option><option value="55">----شيبس</option><option value="66">--الزيوت و السمن</option><option value="67">--بهارات</option><option value="68">--مشروبات</option><option value="69">----المشروبات الباردة</option><option value="70">----المشروبات الساخنة</option><option value="73">----زهورات</option><option value="71">--غير غذائية</option><option value="72">--عروض</option><option value="80">--مواد للبيع داخل الشركة</option>
			</select>
		<form id="searchbox" class="input-group" method="get" action="https://alaseel.nl/ar/بحث">
		   
			<input type="hidden" name="controller" value="search">
			
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			
			<input class="search_query form-control float-xs-left" type="text" id="search_query_top" name="s" placeholder="بحث ضمن كل المتجر" value="" />
			
			<div id="wb_url_ajax_search" style="display:none">
			<input type="hidden" value="https://alaseel.nl/modules/wbblocksearch/controller_ajax_search.php" class="url_ajax" />
			</div>
			<div class="input-group-btn">
			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span class="f1 text-capitalize">بحث</span>
			</button>
			<a href="javascript:void(0)" class="closebtn close-nav" onclick="closeSearch()"><i class="fa fa-close"></i></a>
			</div>
		</form>
		
	</div>
</div>
</div><script type="text/javascript">
var limit_character = "<p class='limit'>عدد المحارف على الاقل 3</p>";
var close_text = "اغلاق";
</script>
<!-- /Block search module TOP --><div id="_desktop_user_info" class="dropdown js-dropdown hidden-md-down d-inline-block">
  <div class="user-info" data-toggle="dropdown">
      <li class="d-inline-block">
        <span class="svgbg"><svg width="24px" height="23px"><use xlink:href="#huser"></use></svg></span>
      </li>
      <li class="d-inline-block text-xs-left hidden-md-down">
        <h4>&nbsp;تسجيل</h4>
      </li>
  </div>
    <ul class="dropdown-menu user-down dropdown-menu-right">
            <li> <a href="https://alaseel.nl/ar/my-account" title="تسجيل الدخول إلى حسابك" rel="nofollow">
        <i class="fa fa-sign-in"></i>
        تسجيل الدخول
      </a></li>
	  <li> <a href="https://alaseel.nl/ar/registration" title="تسجيل الدخول إلى حسابك" rel="nofollow">
		<i class="fa fa-user"></i>
		إنشاء حساب 
		</a></li>
        
    
    
  </ul>
</div>
</div> 
      </div>

    </div>
    </div>

<div class="navmenu">
  <div class="container">
    <div class="row">
      <!-- Module Megamenu-->
<div id="_desktop_top_menu" class="container_wb_megamenu hidden-md-down col-xs-12 text-xs-center">
<div class="wb-menu-vertical clearfix">
	<div class="menu-vertical">
	<a href="javascript:void(0);" class="close-menu-content"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
	<ul class="menu-content">
									<li class="level-1 ">
					
					<a href=" https://alaseel.nl/ar/" class=""
					>
										<span>
						الصفحة الرئيسية
											</span>
										</a>
					<span class="icon-drop-mobile"></span>
									</li>
												<li class="level-1  parent">
					
					<a href="https://alaseel.nl/ar/49-مواد_غذائية" class=""
					>
										<span>
						مواد غذائية
											</span>
										</a>
					<span class="icon-drop-mobile"></span>
											<div class="wb-sub-menu menu-dropdown col-xs-12 column-2 wb-sub-center">
															<div class="wb-menu-row row ">
																														<div class="wb-menu-col col-xs-12 col-sm-3  CAT">
																									<ul class="ul-column ">
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/61-ملوخية_خضروات_مجففة">ملوخية خضروات مجففة</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/60-صلصات_دبس_رمان_وخل">صلصات دبس رمان وخل</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/62-اجبان_و_البان">اجبان و البان</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/58-المخللات_والمكدوس">المخللات والمكدوس</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/65-زيتون">زيتون</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/47-منتجات_مجمدة">منتجات مجمدة</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/59-خلطات_غذائية">خلطات غذائية</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/48-"></a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/57-"></a>
																													</li>
																										</ul>
																							</div>
																					<div class="wb-menu-col col-xs-12 col-sm-3  CAT">
																									<ul class="ul-column ">
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/50-معلبات">معلبات</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/51-مواد_ايرانية">مواد ايرانية</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/64-حلاوة_و_طحينة">حلاوة و طحينة</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/63-الحبوب_و_البقوليات">الحبوب و البقوليات</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/52-موالح_ومكسرات">موالح ومكسرات</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/54-تمور">تمور</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/55-شيبس">شيبس</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/46-معمول_بسكويت_وشوكولا">معمول بسكويت وشوكولا</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/56-حلويات">حلويات</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/53-ملونات_منكهات">ملونات منكهات</a>
																													</li>
																										</ul>
																							</div>
																											</div>
													</div>
									</li>
												<li class="level-1 ">
					
					<a href="https://alaseel.nl/ar/66-الزيوت_و_السمن" class="wbIcon"
					>
											<img class="img-icon" src="/modules/wbmegamenu/views/img/icons/fa fa-binoculars" alt=""/>
										<span>
						الزيوت و السمن
											</span>
										</a>
					<span class="icon-drop-mobile"></span>
									</li>
												<li class="wbCart level-1 "><a href="https://alaseel.nl/ar/67-بهارات" class=""><span>بهارات</span></a></li>
												<li class="level-1  parent">
					
					<a href="https://alaseel.nl/ar/68-مشروبات" class=""
					>
										<span>
						مشروبات
											</span>
										</a>
					<span class="icon-drop-mobile"></span>
											<div class="wb-sub-menu menu-dropdown col-xs-12 column-1 wb-sub-top">
															<div class="wb-menu-row row ">
																														<div class="wb-menu-col col-xs-12 col-sm-3  CAT">
																									<ul class="ul-column ">
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/69-المشروبات_الباردة">المشروبات الباردة</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/70-المشروبات_الساخنة">المشروبات الساخنة</a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/73-زهورات">زهورات</a>
																													</li>
																										</ul>
																							</div>
																											</div>
													</div>
									</li>
												<li class="level-1  parent">
					
					<a href="https://alaseel.nl/ar/71-غير_غذائية" class=""
					>
										<span>
						غير غذائية
											</span>
										</a>
					<span class="icon-drop-mobile"></span>
											<div class="wb-sub-menu menu-dropdown col-xs-12 column-2 wb-sub-center">
															<div class="wb-menu-row row ">
																														<div class="wb-menu-col col-xs-12 col-sm-2  CAT">
																									<ul class="ul-column ">
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/76-"></a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/74-"></a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/75-"></a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/77-"></a>
																													</li>
																											<li class="menu-item  item-header ">
																															<a href="https://alaseel.nl/ar/78-"></a>
																													</li>
																										</ul>
																							</div>
																											</div>
													</div>
									</li>
												<li class="wbCart level-1 "><a href="https://alaseel.nl/ar/72-عروض" class=""><span>عروض</span></a></li>
						</ul>
	</div>
	<!-- <script type="text/javascript">
		text_more = "More";
		vnumLiItem = $("#wb-menu-vertical .menu-content li.level-1").length;
		nIpadHorizontal = 6;
		nIpadVertical = 5;
		function getHtmlHide(nIpad,vnumLiItem) 
			 {
				var htmlLiHide="";
				if($("#more_megamenu").length==0)
					for(var i=(nIpad+1);i<=vnumLiItem;i++)
						htmlLiHide+='<li>'+$('#wb-menu-vertical ul.menu-content li.level-1:nth-child('+i+')').html()+'</li>';
				return htmlLiHide;
			}

		htmlLiH = getHtmlHide(nIpadHorizontal,vnumLiItem);
		htmlLiV = getHtmlHide(nIpadVertical,vnumLiItem);
		htmlMenu=$("#wb-menu-vertical").html();
		
		$(window).load(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
		});
		$(window).resize(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
		});
	</script> -->
</div>
</div>
<!-- /Module Megamenu -->
    </div>
  </div>
</div>        
      </header>

      
        
<aside id="notifications">
    
    
    
    </aside>
      
            <section id="wrapper">
        
        <div class="container-fluid">
          <div class="row">
          
            <nav data-depth="1" class="breadcrumb col-xs-12">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList">
    
              
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="https://alaseel.nl/ar/">
              <span itemprop="name">الصفحة الرئيسية</span>
            </a>
            <meta itemprop="position" content="1">
          </li>
        
          
  </ol>
</nav>
          
          <div id="cat-left-column"></div>
          

          
  <div id="content-wrapper" class="col-xs-12">
    
    

  <section id="main">

    
      
    

    
      <section id="content" class="page-home">
        

        
          
            <div class="s-panel">
  <div class="homeslider-container slideshow-panel" data-interval="5000" data-wrap="false" data-pause="hover">
    <ul class="slider slider-for">
              <li class="slide">
          <a href="#">
            <img src="assets/img/01.jpg" alt="" class="img-responsive center-block" width=1920 height=720/>
          </a>
                 </li>
              <li class="slide">
          <a href="#">
            <img src="assets/img/banner02.jpg" alt="" class="img-responsive center-block" width=1920 height=720/>
          </a>
                 </li>
              <li class="slide">
          <a href="#">
            <img src="assets/img/banner03.jpg" alt="" class="img-responsive center-block" width=1920 height=720/>
          </a>
                 </li>
              <li class="slide">
          <a href="#">
            <img src="assets/img/Alarjawi01.jpg" alt="" class="img-responsive center-block" width=1920 height=720/>
          </a>
                 </li>
          </ul>
  </div>
</div><div class="container">
<div class="imglatest row">
  <div data-wrap="false">
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/49-%D9%85%D9%88%D8%A7%D8%AF_%D8%BA%D8%B0%D8%A7%D8%A6%D9%8A%D8%A9">
            <img src="assets/img/FoodsAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/50-%D9%85%D8%B9%D9%84%D8%A8%D8%A7%D8%AA">
            <img src="assets/img/CansAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/66-%D8%A7%D9%84%D8%B2%D9%8A%D9%88%D8%AA_%D9%88_%D8%A7%D9%84%D8%B3%D9%85%D9%86">
            <img src="assets/img/oilsandgheeAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/62-%D8%A7%D8%AC%D8%A8%D8%A7%D9%86_%D9%88_%D8%A7%D9%84%D8%A8%D8%A7%D9%86">
            <img src="assets/img/DAIRYAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/63-%D8%A7%D9%84%D8%AD%D8%A8%D9%88%D8%A8_%D9%88_%D8%A7%D9%84%D8%A8%D9%82%D9%88%D9%84%D9%8A%D8%A7%D8%AA">
            <img src="assets/img/CEREALSLEGUMESAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/58-%D8%A7%D9%84%D9%85%D8%AE%D9%84%D9%84%D8%A7%D8%AA_%D9%88%D8%A7%D9%84%D9%85%D9%83%D8%AF%D9%88%D8%B3">
            <img src="assets/img/PICKLESMAKDOUSAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/52-%D9%85%D9%88%D8%A7%D9%84%D8%AD_%D9%88%D9%85%D9%83%D8%B3%D8%B1%D8%A7%D8%AA">
            <img src="assets/img/NUTS.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/67-%D8%A8%D9%87%D8%A7%D8%B1%D8%A7%D8%AA">
            <img src="assets/img/SpicesAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/46-%D9%85%D8%B9%D9%85%D9%88%D9%84_%D8%A8%D8%B3%D9%83%D9%88%D9%8A%D8%AA_%D9%88%D8%B4%D9%88%D9%83%D9%88%D9%84%D8%A7">
            <img src="assets/img/BISCUITSCHOCOLATESAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/68-%D9%85%D8%B4%D8%B1%D9%88%D8%A8%D8%A7%D8%AA">
            <img src="assets/img/BeveragesAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/71-%D8%BA%D9%8A%D8%B1_%D8%BA%D8%B0%D8%A7%D8%A6%D9%8A%D8%A9">
            <img src="assets/img/NonfoodAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
        <div class="col-sm-6 col-xs-12">
        <div class="beffect">
          <a href="https://alaseel.nl/ar/72-%D8%B9%D8%B1%D9%88%D8%B6">
            <img src="assets/img/SaleAR01.jpg" alt="" width=660 height=300  class="img-responsive center-block"/>
          </a>
  		</div>
  	</div>
    </div>
</div>
</div><div class="container imgbanner">
<div class="row">
</div>
</div><div class="parallax-bg">

         
          <div class="toprt" style="background-image: url('assets/img/wepik-export-202306282205537Ewt.png');">
			
			</div>
		  

         
          <div class="toprt" style="background-image: url('assets/img/wepik-export-20230628221107xRXs.png');">
			
			</div>
		  

      
</div>







          
        
        
<div class="container">
  <div class="logos row">
  <div data-interval="5000" data-wrap="true" data-pause="hover">
    <ul id="owl-logo" class="rslide owl-carousel owl-theme">
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/86-gota">
            <img src="assets/img/Algota01.png" alt="منتجات الغوطة"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/87-durra">
            <img src="assets/img/Durra01.png" alt="الدرة"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/88-al-hamwi-coffee">
            <img src="assets/img/Hamwi01.png" alt="بن الحموي"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/89-kasih">
            <img src="assets/img/Kasih01.png" alt="الكسيح"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/91-alburj">
            <img src="assets/img/Alburj01.png" alt="Alburj"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/92-zatar-al-arjawi">
            <img src="assets/img/Alarjaoui01.png" alt="زعتر العرجاوي"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/93-yasmeen">
            <img src="assets/img/Yasmeen01.png" alt="حلويات ياسمين"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/90-kolios">
            <img src="assets/img/Kolios01.png" alt="كوليوس"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/94-original">
            <img src="assets/img/Original01.png" alt="اورجينال"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
             <li class="lslide col-xs-12">
          <a href="https://alaseel.nl/ar/brand/95-nasma">
            <img src="assets/img/Nesma01.png" alt="مجمدات نسمة"  class="img-responsive center-block" width=300 height=300/>
          </a>
        </li>
          </ul>
  </div>
</div>
</div>
      </section>
    

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


    
  </div>


          
        </div>
      </div>
    
      </section>
            <footer id="footer">
        
          <div class="container">
  <div class="row">

  <div class="block_newsletter text-xs-center" id="newsleter">
  <h5>اشترك في النشرة الإخبارية</h5>
    <form action="https://alaseel.nl/ar/#newsleter" method="post">
      <input
          class="float-xs-right btn btn-primary"
          name="submitNewsletter"
          type="submit"
          value="اشتراك"
        > 
        <div class="input-wrapper">
          <input
            name="email"
            type="text"
            value=""
            placeholder="عنوان بريدك  الإلكتروني"
            aria-labelledby="block-newsletter-label"
          >
        </div>
        <input type="hidden" name="action" value="0">
        <div class="clearfix"></div>
                                         
              </form>
    <h6>يمكنك إلغاء الاشتراك في أي لحظة. لهذا الغرض، يرجى الاطلاع على معلومات الاتصال لدينا في الإشعار القانوني.</h6>
</div>

</div>
</div>

<div class="footer-container">
  <div class="container">
      <div class="row">
          
            <div class="block-contact col-md-3 col-sm-3 col-lg-3 col-xs-12 links wrapper">
<h4 class="hidden-sm-down c-info">معلومات المتجر</h4>
<div class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#footer_contact">
    <span class="h3">معلومات الاتصال</span>
   <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="fa fa-plus add"></i>
            <i class="fa fa-minus remove"></i>
          </span>
  </span>
  </div>
  <ul id="footer_contact" class="fthr collapse">
  <li class="block">
    <div class="icon float-xs-left"><svg width="20px" height="20px"><use xlink:href="#add"></use></svg></div>
    <div class="data ad">Alaseel BV<br />Vlotbrugweg 8A<br />1332AH  Almere<br />هولندا</div>
  </li>

      <li class="block">
      <div class="icon float-xs-left"><svg width="20px" height="20px"><use xlink:href="#phone"></use></svg></div>
      <div class="data">
        <a href="tel:0031625555104">0031625555104</a>
       </div>
    </li>
  
        <li class="block">
      <div class="icon float-xs-left"><svg width="22px" height="22px"><use xlink:href="#mail"></use></svg></div>
      <div class="data email">
      <a href="mailto:info@alaseel.nl">info@alaseel.nl</a>
       </div>
    </li>
    <div class="block-social">

  <div class="">
    <ul>
              <li class="facebook"><a href="https://www.facebook.com/alaseelnl" target="_blank"></a></li>
              <li class="youtube"><a href="https://www.youtube.com/@alaseel-nl" target="_blank"></a></li>
              <li class="instagram"><a href="https://www.instagram.com/alaseel_vof" target="_blank"></a></li>
              <li class="tiktok"><a href="https://www.tiktok.com/@alaseel.n" target="_blank"></a></li>
          </ul>
  </div>

</div>
</ul>
</div><div id="block_myaccount_infos" class="col-sm-3 col-md-3 col-xs-12 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a href="https://alaseel.nl/ar/my-account" rel="nofollow">
      الحساب الخاص بك
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">الحساب الخاص بك</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="fa fa-plus add"></i>
        <i class="fa fa-minus remove"></i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://alaseel.nl/ar/identity" title="المعلومات الشخصية" rel="nofollow">
            المعلومات الشخصية
          </a>
        </li>
            <li>
          <a href="https://alaseel.nl/ar/سجل طلبات الشراء" title="الطلبات" rel="nofollow">
            الطلبات
          </a>
        </li>
            <li>
          <a href="https://alaseel.nl/ar/addresses" title="العناوين" rel="nofollow">
            العناوين
          </a>
        </li>
        
  </ul>
</div><div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 links l-list">
  <div class="row">
      <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 wrapper">
      <h3 class="h3 hidden-sm-down">المنتجات</h3>
            <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_30601" data-toggle="collapse">
        <span class="h3">المنتجات</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="fa fa-plus add"></i>
            <i class="fa fa-minus remove"></i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_30601" class="collapse">
                  <li>
            <a
                id="link-product-page-prices-drop-1"
                class="cms-page-link"
                href="https://alaseel.nl/ar/prices-drop"
                title="Our special products">
              العروض
            </a>
          </li>
                  <li>
            <a
                id="link-product-page-new-products-1"
                class="cms-page-link"
                href="https://alaseel.nl/ar/المنتجات الجديدة"
                title="منتجاتنا الجديدة">
              وصل حديثاً
            </a>
          </li>
                  <li>
            <a
                id="link-product-page-best-sales-1"
                class="cms-page-link"
                href="https://alaseel.nl/ar/الأكثر مبيعاً"
                title="أفضل المبيعات">
              الأكثر مبيعاً
            </a>
          </li>
              </ul>
    </div>
      <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 wrapper">
      <h3 class="h3 hidden-sm-down">شركتنا</h3>
            <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_79863" data-toggle="collapse">
        <span class="h3">شركتنا</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="fa fa-plus add"></i>
            <i class="fa fa-minus remove"></i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_79863" class="collapse">
                  <li>
            <a
                id="link-cms-page-3-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/content/3-terms-and-conditions-of-use"
                title="Our terms and conditions of use">
              شروط وأحكام الاستخدام
            </a>
          </li>
                  <li>
            <a
                id="link-cms-page-4-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/content/4-about-us"
                title="Learn more about us">
              حول الأصيل
            </a>
          </li>
                  <li>
            <a
                id="link-cms-page-6-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/content/6-مركز-خدمة-زبائن-الاصيل"
                title="لانشاء حساب جديد والتواصل مع المبيعات والمحاسبة والادارة">
              مركز خدمة زبائن الاصيل
            </a>
          </li>
                  <li>
            <a
                id="link-static-page-contact-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/اتصل بنا"
                title="استخدم نموذج للاتصال بنا">
              اتصل بنا
            </a>
          </li>
                  <li>
            <a
                id="link-static-page-authentication-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/login"
                title="">
              تسجيل الدخول
            </a>
          </li>
                  <li>
            <a
                id="link-static-page-my-account-2"
                class="cms-page-link"
                href="https://alaseel.nl/ar/my-account"
                title="">
              حسابي
            </a>
          </li>
              </ul>
    </div>
    </div>
</div>  <div
  class="wishlist-add-to"
  data-url="https://alaseel.nl/ar/module/blockwishlist/action?action=getAllWishlist"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            قوائم المفضلة
          </h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">
          <choose-list
            @hide="toggleModal"
            :product-id="productId"
            :product-attribute-id="productAttributeId"
            :quantity="quantity"
            url="https://alaseel.nl/ar/module/blockwishlist/action?action=getAllWishlist"
            add-url="https://alaseel.nl/ar/module/blockwishlist/action?action=addProductToWishlist"
            empty-text="No list found."
          ></choose-list>
        </div>

        <div class="modal-footer">
          <a @click="openNewWishlistModal" class="wishlist-add-to-new text-primary">
            <i class="material-icons">add_circle_outline</i> انشاء مفضلة
          </a>
        </div>
      </div>
    </div>
  </div>

  <div
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>


  <div
  class="wishlist-delete"
      data-delete-list-url="https://alaseel.nl/ar/module/blockwishlist/action?action=deleteWishlist"
        data-delete-product-url="https://alaseel.nl/ar/module/blockwishlist/action?action=deleteProductFromWishlist"
    data-title="Remove product from wishlist"
  data-title-list="Delete wishlist"
  data-placeholder='The product will be removed from "%nameofthewishlist%".'
  data-cancel-text="إلغاء"
  data-delete-text="إزالة"
  data-delete-text-list="حذف"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">((modalTitle))</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" v-if="productId">
          <p class="modal-text">((confirmMessage))</p> 
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <button
            type="button"
            class="btn btn-primary"
            @click="deleteWishlist"
          >
            ((modalDeleteText))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

  <div
  class="wishlist-create"
  data-url="https://alaseel.nl/ar/module/blockwishlist/action?action=createNewWishlist"
  data-title="Create wishlist"
  data-label="Wishlist name"
  data-placeholder="Add name"
  data-cancel-text="إلغاء"
  data-create-text="Create wishlist"
  data-length-text="List title is too short"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">((title))</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group form-group-lg">
            <label class="form-control-label" for="input2">((label))</label>
            <input
              type="text"
              class="form-control form-control-lg"
              v-model="value"
              id="input2"
              :placeholder="placeholder"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <button
            type="button"
            class="btn btn-primary"
            @click="createWishlist"
          >
            ((createText))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

  <div
  class="wishlist-login"
  data-login-text="تسجيل الدخول"
  data-cancel-text="إلغاء"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">تسجيل الدخول</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="modal-text">You need to be logged in to save products in your wishlist.</p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <a
            type="button"
            class="btn btn-primary"
            :href="prestashop.urls.pages.authentication"
          >
            ((loginText))
          </a>
        </div>
      </div>
    </div>
  </div>

  <div
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

  <div
    class="wishlist-toast"
    data-rename-wishlist-text="Wishlist name modified!"
    data-added-wishlist-text="Product added to wishlist!"
    data-create-wishlist-text="Wishlist created!"
    data-delete-wishlist-text="Wishlist deleted!"
    data-copy-text="Share link copied!"
    data-delete-product-text="Product deleted!"
  ></div>

          
    </div>
  </div>
</div>
 
<div class="copy text-xs-center">
<div class="container">
    <div class="row">
      <div class="col-xs-12">
          
          <a class="_blank">
              © 2024  جميع الحقوق محفوظة - متجر الأصيل 
طور من قبل شركة  <a class="phenix" href="https://phenixsof.t.com" target="_blank">أنظمة فينيكس</a>
          </a>
              
          
      </div>
    </div>
</div>
</div>
<a href="" id="scroll" title="Scroll to Top" style="display: block;"><i class="fa fa-angle-double-up"></i></a>        
      </footer>
    </main>

    
  <?php 
    include('scripts.html');
  ?>

    
  </body>

</html>