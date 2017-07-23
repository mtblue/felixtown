<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
<div id="wrapper">
	<div id="t02">
		<div id="t02L">
            <div class="ptitle">
                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
            </div>
            <div class="ts03">
                <p>三幸住研の経験と実績をご紹介。</p>
            </div>
            <div class="tr01">
                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/trackrecord_img.jpg" />
                <table>
                    <tr>
                        <th>豊中</th>
                        <td>
                            ■稲津　■永楽荘　■上野東　■上野西　■岡上の町　■小曽根　■春日町　■熊野町　■桜の町　■柴原町
                            ■千里園　■刀根山　■服部西町　■本町　■緑ヶ丘　■宮山町　■向丘　■夕日丘　　　etc...	
                        </td>
                    </tr>
                    <tr>
                        <th>池田／箕面／能勢</th>
                        <td>
                        ■旭丘　■石橋　■石船　■瀬川　■畑　■畑野　■伏尾台　■平和台　■宿野　　　etc...
                        </td>
                    </tr>
                    <tr>
                        <th>宝塚／川西／伊丹</th>
                        <td>
                        ■鋳物師　■鼓が滝　■清荒神　■宝塚南口　■多田院　■長寿ヶ丘　■つつじが丘　■錦松台　
                        ■荻原台　■瑞穂　■水明台　■山本東　■矢問　　　etc...
                        </td>
                    </tr>
                    <tr>
                        <th>西宮／神戸</th>
                        <td>
                        ■赤坂　■有野中町　■北六甲台　■神戸市北区上津台　■金仙寺　■さくら台　■塩瀬　■茶園町
                        ■中央区坂口通　■中央区山本通　■藤原台　■平成台　■山口町　　　etc...
                        </td>
                    </tr>
                    <tr>
                        <th>その他</th>
                        <td>
                        ■猪名川町旭ヶ丘　■亀岡市畑野町　■三田市あかしあ台　■三田市三田町　■三田市屋敷町
                        ■枚方山之手町　■福島区海老江　■八尾市　　etc...
                        </td>
                    </tr>
                </table>
                <p>その他、1,000件以上の実績！</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
