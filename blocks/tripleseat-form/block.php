<?php
/**
 * Block template file: block.php
 *
 * Tripleseat Form Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tripleseat-form-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-tripleseat-form';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}

$classes .= ' ' . get_field('bottom_margin');
?>

<style>
    #<?php echo esc_attr( $id ); ?> {
        margin-top: clamp(2rem, 6vw, 4.5rem);
    }
    #<?php echo esc_attr( $id ); ?> #tripleseat-form {
        background: #fffdf8;
        border: 1px solid rgba(125, 147, 131, 0.55);
        border-top: 6px solid #7d9383;
        box-shadow: 0 22px 50px rgba(49, 38, 29, 0.08);
        color: #31261d;
        font-family: Apercu, sans-serif;
        padding: clamp(1.25rem, 4vw, 2.75rem);
    }
    #<?php echo esc_attr( $id ); ?> #tripleseat_embed_form,
    #<?php echo esc_attr( $id ); ?> #tripleseat_dynamic_embed_form {
        background: transparent;
        padding: 0;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-heading-h1 {
        color: #31261d;
        font-size: clamp(1.45rem, 2.8vw, 2rem);
        font-weight: 700;
        letter-spacing: 0;
        line-height: 1.08;
        margin: 0 0 0.65rem;
        text-transform: uppercase;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-heading-h3 {
        border-top: 1px solid rgba(125, 147, 131, 0.45);
        color: #7d9383;
        font-size: clamp(1rem, 2.2vw, 1.25rem);
        font-weight: 700;
        letter-spacing: 0;
        line-height: 1.2;
        margin: 2rem 0 1rem;
        padding-top: 1.25rem;
        text-transform: uppercase;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-text {
        color: rgba(49, 38, 29, 0.82);
        font-size: 1rem;
        line-height: 1.45;
        margin: 0 0 1.5rem;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-label {
        color: #31261d;
        display: block;
        font-family: Apercu, sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 0;
        line-height: 1.2;
        margin: 0 0 0.4rem;
        text-transform: uppercase;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-input,
    #<?php echo esc_attr( $id ); ?> input[type="text"],
    #<?php echo esc_attr( $id ); ?> input[type="email"],
    #<?php echo esc_attr( $id ); ?> input[type="tel"],
    #<?php echo esc_attr( $id ); ?> input[type="number"],
    #<?php echo esc_attr( $id ); ?> input[type="date"],
    #<?php echo esc_attr( $id ); ?> input[type="time"],
    #<?php echo esc_attr( $id ); ?> select,
    #<?php echo esc_attr( $id ); ?> textarea {
        background: #fffdf8;
        border: 1px solid rgba(49, 38, 29, 0.32);
        border-radius: 0;
        color: #31261d;
        font-family: Apercu, sans-serif;
        font-size: 1rem;
        line-height: 1.3;
        min-height: 46px;
        padding: 0.75rem 0.85rem;
        transition: border-color 160ms ease, box-shadow 160ms ease, background-color 160ms ease;
        width: 100%;
    }
    #<?php echo esc_attr( $id ); ?> input[type="date"],
    #<?php echo esc_attr( $id ); ?> input[type="time"] {
        color-scheme: light;
        line-height: 1.3;
    }
    #<?php echo esc_attr( $id ); ?> input[type="date"]::-webkit-calendar-picker-indicator,
    #<?php echo esc_attr( $id ); ?> input[type="time"]::-webkit-calendar-picker-indicator {
        cursor: pointer;
        height: 1rem;
        margin-left: 0.4rem;
        opacity: 0.72;
        padding: 0.15rem;
        width: 1rem;
    }
    #<?php echo esc_attr( $id ); ?> textarea {
        min-height: 120px;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-input:focus,
    #<?php echo esc_attr( $id ); ?> input:focus,
    #<?php echo esc_attr( $id ); ?> select:focus,
    #<?php echo esc_attr( $id ); ?> textarea:focus {
        background: #ffffff;
        border-color: #7d9383;
        box-shadow: 0 0 0 3px rgba(125, 147, 131, 0.18);
        outline: none;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-time-wrapper {
        align-items: flex-start;
        display: flex;
        height: auto;
        max-width: 100%;
        width: 150px;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-time-icon {
        display: none;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-time.timeselect_input {
        margin-bottom: 0;
        width: 150px;
    }
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-field-group,
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-name-field,
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-field {
        margin-bottom: 1rem;
    }
    #<?php echo esc_attr( $id ); ?> input[type="checkbox"],
    #<?php echo esc_attr( $id ); ?> input[type="radio"] {
        accent-color: #7d9383;
    }
    #<?php echo esc_attr( $id ); ?> input[type="submit"],
    #<?php echo esc_attr( $id ); ?> button[type="submit"],
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-submit {
        background: #31261d;
        border: 1px solid #31261d;
        border-radius: 0;
        color: #fffdf8;
        cursor: pointer;
        display: inline-flex;
        font-family: Apercu, sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        justify-content: center;
        letter-spacing: 0;
        line-height: 1.1;
        min-height: 48px;
        padding: 0.95rem 1.4rem;
        text-transform: uppercase;
        transition: background-color 160ms ease, border-color 160ms ease, color 160ms ease;
        width: auto;
    }
    #<?php echo esc_attr( $id ); ?> input[type="submit"]:hover,
    #<?php echo esc_attr( $id ); ?> button[type="submit"]:hover,
    #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-submit:hover {
        background: #f28365;
        border-color: #f28365;
        color: #31261d;
    }
    @media (max-width: 767px) {
        #<?php echo esc_attr( $id ); ?> #tripleseat-form {
            border-left: 0;
            border-right: 0;
            margin-left: -20px;
            margin-right: -20px;
            padding: 1.25rem 20px;
        }
        #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-heading-h1 {
            font-size: 1.55rem;
        }
        #<?php echo esc_attr( $id ); ?> input[type="submit"],
        #<?php echo esc_attr( $id ); ?> button[type="submit"],
        #<?php echo esc_attr( $id ); ?> .tripleseat-dlf-submit {
            width: 100%;
        }
    }
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container container-narrow">
        <div id="tripleseat-form">
            <?php print get_field('embed_code'); ?>
        </div>
    </div>
</div>