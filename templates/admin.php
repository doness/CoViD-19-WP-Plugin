<?php
$data = get_option('covid19_countries');
?>

<div id="covid19">
    <h1><?php esc_html_e('Documentation', 'covid19'); ?></h1>
    <h3><?php esc_html_e('Countries', 'covid19'); ?></h3>
    <select name="covid_countries">
        <option value=""><?php esc_html_e('========== Global ==========', 'covid19'); ?></option>
        <?php
        foreach ($data as $item) {
            echo '<option value="'.$item->country.'">'.$item->country.'</option>';
        }
        ?>
    </select>
    <h3><?php esc_html_e('Shortcode', 'covid19'); ?></h3>
    <code id="covid_shortcode"><?php esc_html_e('[covid19]', 'covid19'); ?></code>
    <p><i><?php esc_html_e('Copy & Paste this Shortcode into Post, Page or Widget.', 'covid19'); ?></i></p>
    <h3><?php esc_html_e('Attributes', 'covid19'); ?></h3>
    <ul class="covid-attributes">
        <li><strong><?php esc_html_e('title:', 'covid19'); ?></strong> <?php esc_html_e('Title of box - default is "Global"', 'covid19'); ?></li>
        <li><strong><?php esc_html_e('label_confirmed:', 'covid19'); ?></strong> <?php esc_html_e('Label Confirmed - default is "Confirmed"', 'covid19'); ?></li>
        <li><strong><?php esc_html_e('label_deaths:', 'covid19'); ?></strong> <?php esc_html_e('Label Deaths - default is "Deaths"', 'covid19'); ?></li>
        <li><strong><?php esc_html_e('label_recovered:', 'covid19'); ?></strong> <?php esc_html_e('Label Recovered - default is "Recovered"', 'covid19'); ?></li>
        <li><strong><?php esc_html_e('style:', 'covid19'); ?></strong> <?php esc_html_e('Availible styles: default, 2, 3, 4'); ?></li>
    </ul>
    <strong><?php esc_html_e('Example:', 'covid19'); ?></strong><br/>
    <code><?php esc_html_e('[covid19 country="Indonesia" title="Global" style="2" label_confirmed="Confirmed" label_deaths="Deaths" label_recovered="Recovered"]', 'covid19'); ?></code>

</div>