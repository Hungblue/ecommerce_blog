@extends('layouts.front')

@section('title')
Welcome to Shop
@endsection

@section('content')
<div class="services-breadcrumb">
  <div class="agile_inner_breadcrumb">
    <div class="container">
      <ul class="w3_short">
        <li>
          <a href="index">Home</a>
          <i>|</i>
        </li>
        <li>Help</li>
      </ul>
    </div>
  </div>
</div>
<!-- //page -->

<!-- help -->
<div class="faqs-w3l py-sm-5 py-4">
  <div class="container py-xl-4 py-lg-2">
    <!-- tittle heading -->
    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
      <span>H</span>elp
      <span>P</span>age
    </h3>
    <!-- //tittle heading -->
    <!-- help content -->
    <div class="wthree-help mb-sm-5 mb-4">
      <div class="agile-left-help">
        <h3 class="w3-head">How Can We help you</h3>
        <form action="#" method="get">
          <textarea placeholder="Your Query" name="Message" required=""></textarea>
          <input type="submit" value="Submit">
        </form>
        <h5 class="my-sm-4 my-3">OR</h5>
        <a href="/contact">Contact Us</a>
      </div>
    </div>
    <!-- //help content -->
    <!-- Faqs -->
    <h3 class="w3-head mb-2">Top 10 Frequently asked questions</h3>
    <div class="faq-w3agile">
      <ul class="faq pl-4">
        <li class="item1 mt-3 pl-2">
          <a href="#" title="click here">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula
            ipsum nec ?</a>
          <ul>
            <li class="subitem1">
              <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore.
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque
                corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item2 mt-3 pl-2">
          <a href="#" title="click here">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur.
            Ut semper nisl ut laoreet ultrices ?
          </a>
          <ul>
            <li class="subitem1">
              <p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy
                nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio
                dignissimos ducimus
                qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati
                cupiditate non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item3 mt-3 pl-2">
          <a href="#" title="click here">Consectetuer adipiscing elit Etiam faucibus viverra libero vel efficitur. Ut
            semper nisl ut laoreet ultrices?</a>
          <ul>
            <li class="subitem1">
              <p>Dincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy
                nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio
                dignissimos ducimus
                qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati
                cupiditate non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item4 mt-3 pl-2">
          <a href="#" title="click here">Sed diam nonummy nibh euismod Etiam faucibus viverra libero vel efficitur. Ut
            semper nisl ut laoreet ultrices?</a>
          <ul>
            <li class="subitem1">
              <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                consectetuer
                adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium
                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item5 mt-3 pl-2">
          <a href="#" title="click here">Euismod tincidunt laoreet Etiam faucibus viverra libero vel efficitur ?</a>
          <ul>
            <li class="subitem1">
              <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                consectetuer
                adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium
                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item6 mt-3 pl-2">
          <a href="#" title="click here">Voluptas sit aspernatur aut Ut semper nisl ut laoreet ultrices ?</a>
          <ul>
            <li class="subitem1">
              <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                consectetuer
                adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium
                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item7 mt-3 pl-2">
          <a href="#" title="click here">Donec ut quam ligula feugiat Ut semper nisl ut laoreet ultrices ?</a>
          <ul>
            <li class="subitem1">
              <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                consectetuer
                adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium
                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item8 mt-3 pl-2">
          <a href="#" title="click here">The standard Lorem Ipsum Ut semper nisl ut laoreet ultrices passage ?</a>
          <ul>
            <li class="subitem1">
              <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy
                nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio
                dignissimos ducimus
                qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati
                cupiditate non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item9 mt-3 pl-2">
          <a href="#" title="click here">Consectetuer adipiscing Ut semper nisl ut laoreet ultrices elit ?</a>
          <ul>
            <li class="subitem1">
              <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy
                nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio
                dignissimos ducimus
                qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati
                cupiditate non provident.</p>
            </li>
          </ul>
        </li>
        <li class="item10 mt-3 pl-2">
          <a href="#" title="click here">Sed diam nonummy Ut semper nisl ut laoreet ultrices nibh euismod ?</a>
          <ul>
            <li class="subitem1">
              <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam
                nonummy nibh euismod
                accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                corrupti quos dolores
                et quas molestias excepturi sint occaecati cupiditate non provident.</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- //Faqs -->
  </div>
</div>
<!-- //help -->

@include('frontend.inc.front-middle-section')

@endsection

@section('scripts')
<!-- script for tabs -->
<script>
  $(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
</script>
<!-- script for tabs -->
@endsection