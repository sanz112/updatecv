<style>
*
  box-sizing border-box

body
  align-items center
  display flex
  justify-content center
  min-height 100vh
  transform-style preserve-3d
  perspective 1500px
  background #86e2d5


$primary = #ff9478
$secondary = #f2f1ef
$darken = 5%
$darker = 10%
$core = #abb7b7
:root
  --carouselDur 4
  --horseDur 2
  --baseInnerEven darken($primary, $darken)
  --baseInnerOdd darken($secondary, $darker)
  --baseEven darken($primary, $darker)
  --baseOdd darken($secondary, $darken)
  --core $core
  --coreWindow #ffffff
  --coreWindowSill darken($core, 25%)
  --baseLight #ffffff
  --baseSkirt $primary
  --hatOdd $primary
  --hatEven $secondary

.carousel
  height 100px
  width 100px
  transform translate(-50%, -50%) rotateX(-15deg) rotateY(40deg)
  transform-style preserve-3d
  position absolute
  top 50%
  left 50%

  &__core
    bottom -10%
    height 150%
    left 50%
    position absolute
    transform translate(-50%, 0)
    transform-style preserve-3d
    width 20%

    div
      background var(--core)
      height 100%
      left 50%
      position absolute
      top 50%
      transform translate(-50%, -50%) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 30px) rotateY(180deg)
      width 100%

      &:nth-of-type(even)
        &:after
          background var(--coreWindow)
          border 2px solid var(--coreWindowSill)
          border-radius 35% 35% 0 0
          content ''
          height 15%
          left 50%
          position absolute
          top 50%
          transform translate(-50%, 0%)
          width 50%

  &__horses
    animation carousel calc(var(--carouselDur) * 1s) infinite linear
    height 50px
    left 50%
    position absolute
    top 50%
    transform translate(-50%, -50%)
    transform-style preserve-3d
    width 50px
    z-index 5

  &__horse
    animation horse calc(var(--horseDur) * 1s) calc((var(--horseDur) * var(--delay)) * 1s) infinite linear
    font-size 2rem
    left 50%
    position absolute
    top 50%

  &__base
    animation carousel calc(var(--carouselDur) * 1s) infinite linear
    left 50%
    position absolute
    top 100%
    transform translate(-50%, -50%)
    transform-style preserve-3d

    div
      background var(--baseOdd)
      height 20px
      left 50%
      position absolute
      top 0
      transform translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 50px)
      transform-origin top center
      transform-style preserve-3d
      width 20px

      &:before
        $clip = inset(40% 0 0 0)
        -webkit-clip-path $clip
        content ''
        position absolute
        border-bottom 120px solid var(--baseInnerOdd)
        border-left 20px solid transparent
        border-right 20px solid transparent
        clip-path $clip
        left 50%
        transform translate(-50%, 0) rotateX(90deg) translate(0, -50px)
        transform-origin top center
        transform-style preserve-3d


      &:nth-of-type(even)
        background var(--baseEven)
        &:before
          border-bottom 120px solid var(--baseInnerEven)

      &:after
        content ''
        background radial-gradient(circle at 50% 50%, var(--baseLight) 20%, var(--baseSkirt) 20%), var(--baseSkirt)
        height 20px
        left 50%
        position absolute
        top 0
        transform translate3d(-50%, 0, 70px)
        transform-origin top center
        width 40px


  &__hat
    animation carousel calc(var(--carouselDur) * 1s) infinite linear
    bottom 100%
    height 50px
    left 50%
    position absolute
    transform translate(-50%, -50%)
    transform-style preserve-3d
    width 50px

    div
      $height = 140px
      border-bottom $height solid var(--hatOdd)
      border-top 0
      border-left 20px solid transparent
      border-right 20px solid transparent
      left 50%
      position absolute
      top 0
      transform translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) rotateX(65deg)
      transform-origin top center
      transform-style preserve-3d

      &:nth-of-type(even)
        border-bottom $height solid var(--hatEven)

        &:after
          background var(--hatEven)

      &:after
        background var(--hatOdd)
        border-radius 0 0 40px 40px
        content ''
        height 20px
        position absolute
        top 140px
        transform translate(-50%, 0) rotateX(-65deg)
        transform-origin top center
        width 40px


@keyframes carousel
  from
    transform translate(-50%, -50%) rotateY(0deg)
  to
    transform translate(-50%, -50%) rotateY(360deg)

@keyframes horse
  0%, 100%
    transform translate(-50%, -50%) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg)
  50%
    transform translate(-50%, 0) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg)
    </style>

$pug = new Pug([
    // here you can set options
]);

$pug->displayFile('my-pug-template.pug');
    $pug = new Pug(array(
    'pretty' => true,
    'cache' => 'pathto/writable/cachefolder/'
));
    - const horses = 10
- const segments = 20
- const core = 10
.carousel
  .carousel__horses(style=`--horses: ${horses}`)
    - for(let h = 0; h < horses * 2; h++)
      .carousel__horse(style=`--horse: ${h % horses}; --delay: ${h > 9 ? -0.5 : 0}; --depth: ${h > 9 ? 80 : 100}`) 🎠
  .carousel__base(style=`--sides: ${segments}`)
    - for (let s = 0; s < segments; s++)
      div(style=`--side: ${s}`)
  .carousel__core(style=`--sides: ${core}`)
    - for(let o = 0; o < core; o++)
      div(style=`--side: ${o}`)
  .carousel__hat(style=`--sides: ${segments}`)
    - for(let c = 0; c < segments; c++)
      div(style=`--side: ${c}`)