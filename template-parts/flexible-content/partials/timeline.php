<?php
namespace mercurypress;

if( have_rows('timeline') ):
$count = 0;
?>

<div class="timeline">
    <div class="timeline--overflow">
        <div class="timeline--list">
            <?php while( have_rows('timeline') ): the_row();
                $number = get_sub_field('time_period');
                $title = get_sub_field('title');
                $copy = get_sub_field('copy');
                $firstClass = '';
                if (!$count) {
                    $firstClass = ' toggled';
                }
            ?>
            <div class="timeline--item<?php echo $firstClass?>">
                <div class="timeline--item-inner">
                    <?php if ( $number ): ?>
                        <header class="timeline--header">
                            <div class="timeline--time-period"><?php echo esc_html($number) ?></div>
                            <div class="timeline--header---dots">
                                <svg class="timeline--header---connector" id="timeline_header_connector" viewBox="0 0 68 36">
                                    <path d="M39.2,18.3v-0.5c0-8.4,5.8-15.4,13.6-17.3c0.4-0.3,0-0.5,0-0.5H15.2c0,0-0.4,0.2,0.1,0.4C23,2.2,28.9,9.3,28.9,17.7v0.5
                                        c0,8.1-5.5,15-12.9,17.1c-0.5,0.3,0,0.6,0,0.6h36.2c0,0,0.5-0.4-0.1-0.6C44.7,33.3,39.2,26.4,39.2,18.3z"/>
                                    <ellipse cx="9.7" cy="18" rx="9.7" ry="10"/>
                                    <circle cx="58" cy="18" r="10"/>
                                </svg>
                            </div>
                        </header>
                    <?php endif; ?>
                    <div class="timeline--body circle">
                        <svg class="timeline--circle-outter" id="timeline_circle_outter" viewBox="0 0 320 320">
                            <path class="timeline--circle-outter---top" d="M57.5,57.5C84.9,30.1,121.3,15,160,15c38.7,0,75.1,15.1,102.5,42.5C289.9,84.9,305,121.3,305,160h15 C320,71.6,248.4,0,160,0S0,71.6,0,160h15C15,121.3,30.1,84.9,57.5,57.5z"/>
                            <path class="timeline--circle-outter---bottom" d="M262.5,262.5C235.1,289.9,198.7,305,160,305c-38.7,0-75.1-15.1-102.5-42.5C30.1,235.1,15,198.7,15,160H0 c0,88.4,71.6,160,160,160s160-71.6,160-160h-15C305,198.7,289.9,235.1,262.5,262.5z"/>
                        </svg>
                        <?php if ( $title ): ?>
                            <div class="timeline--body-inner circle">
                                <button class="timeline--reveal" aria-label="Reveal <?php echo esc_attr($number) ?> description">
                                    <svg class="timeline--toggle-icon" id="timeline_toggle_icon" viewBox="0 0 36 36" height="36" width="36">
                                        <path d="M35,17H19V1c0-0.6-0.4-1-1-1s-1,0.4-1,1v16H1c-0.6,0-1,0.4-1,1s0.4,1,1,1h16v16c0,0.6,0.4,1,1,1s1-0.4,1-1V19h16 c0.6,0,1-0.4,1-1S35.6,17,35,17z"/>
                                    </svg>
                                </button>
                                <h3 class="timeline--title"><?php echo esc_html($title) ?></h3>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ( $copy ): ?>
                        <footer class="timeline--footer">
                            <p class="timeline--copy"><?php echo esc_html($copy) ?></p>
                        </footer>
                    <?php endif; ?>
                </div>
            </div> 
            <?php 
                $count++;
                endwhile;
            ?>
        </div>
        <div class="slider--arrows timeline--arrows">
            <button class="timeline--prev slider-prev" aria-label="Navigate Left">
                <svg width="36" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </button>
            <button class="timeline--next slider-next" aria-label="Navigate Right">
                <svg width="36" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
            </button>
        </div>        
    </div>
</div>

<?php endif; ?>