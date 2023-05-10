<?php get_header() ?>
<main>
    <div class="ashura__title">
        <div class="ashura__title_inner">
            <div class="ashura__title_left">
                <h3>こんな企業様に必見！</h3>
                <ul>
                    <li><span class="material-symbols-outlined">
                            check_circle
                        </span>File Makerを使って顧客管理をしている</li>
                    <li><span class="material-symbols-outlined">
                            check_circle
                        </span>発信はビジネスフォン・家庭用電話機でコールしている</li>
                    <li><span class="material-symbols-outlined">
                            check_circle
                        </span>通話録音音量とFile Makerが連動していないので検索が面倒</li>
                </ul>
            </div>
            <div class="ashura__title_right">
                <img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/img_ashura.png" alt="ashura">
            </div>
        </div>
    </div>

    <div class="ashura__banner">
        <div class="ashura__banner_inner">
            <p>アウトバウンド型簡易CTI</p>
            <h2>阿修羅ダイヤラー</h2>
            <div class="ashura__banner_badge">
                <p>For File Maker</p>
            </div>
        </div>
    </div>
    <p class="banner__under">阿修羅ダイヤラーはファイルメーカーと連動し、ファイルメーカーの顧客管理画面上に「発信ボタンと「録音ボタン」を追加するだけでClick to Callと通話録音がご利用できます。</p>
    <!-- ---------------------------------------------------- -->
    <section class="ashura__point">
        <div class="ashura__sec_title">

            <h3>阿修羅ダイヤラーのポイント</h3>
        </div>
        <div class="ashura__point_content">
            <div class="ashura__point_content_left">
                <img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-1.png" alt="">
            </div>
            <div class="ashura__point_content_right">
                <div class="ashura__point_content_right_item">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p>File Maker上の「発信ボタン」をクリックするだけで自動発信するので、ダイヤルプッシュよりも素早く発信ができ、間違い電話（番号の押し間違い）も防ぎ、架電効率も飛躍的にUPします。</p>
                </div>
                <div class="ashura__point_content_right_item">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p>録音データは、デフォルトで各々の端末に保存、別途NASなどをご用意いただければNASへ保存も可能。File Maker上の「録音ボタン」から一発で録音ファイルを発見でき、ディレクトリ管理により検索、管理も容易に出来ます。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ashura__function">
        <div class="ashura__sec_title">

            <h3>阿修羅ダイヤラーの機能</h3>
        </div>
        <div class="ashura__function_inner">
            <div class="ashura__function_item">
                <h4>Click to Call機能</h4>
                <p>PC画面上のファイルメーカーの「発信」ボタンをクリックして発信ができます。</p>
                <p>「終了」ボタンをつければ、通話の終了もボタンひとつで可能です。</p>
            </div>
            <div class="ashura__function_item">
                <h4>通話録音機能</h4>
                <p>自動で通話を開始。通話が終了すれば自動で録音も停止します。</p>
            </div>
            <div class="ashura__function_item">
                <h4>保留メロディ再生機能</h4>
                <p>通話中に保留メロディを流すことができます。</p>
            </div>
            <div class="ashura__function_item">
                <h4>架電数ログ機能</h4>
                <p>誰が何件架電したか、表記できます。</p>
                <p>※相手が出なかった場合でも1コールとカウントされます。</p>
            </div>
            <div class="ashura__function_item">
                <h4>File Makerからの発信</h4>
                <p>File Makerのレコード画面上に設定した「発信」ボタンをクリックすると、レコード内に記入された電話番号に発信します。</p>
                <div class="ashura__function_item_image"><img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-2.png" alt=""></div>

            </div>
            <div class="ashura__function_item">
                <h4>録音データの再生</h4>
                <p>通話の開始・終了と共に録音も自動で開始・終了します。</p>
            </div>
            <div class="ashura__function_item">
                <h4>通話録音</h4>
                <p>File Makerのレコード画面上の「録音フォルダを開く」をクリックするとレコードに対応した録音データのフォルダを開きます。</p>
                <p>録音データは、HDD容量を節約するため「ogg vorbis」という形式で圧縮されています。</p>
                <p>※アシュラダイヤラーのインストールされていないPCでで再生するために右クリックから無圧縮wav（PCM）形式に変換することもできます。</p>
                <div class="ashura__function_item_image"><img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-3.png" alt=""></div>
            </div>
            <div class="ashura__function_item">
                <h4>架電数ログ</h4>
                <p>架電件数を記載したログファイルを作成します。</p>
                <p>何件架電したかを把握できます。アポインターの勤怠管理も可能です。</p>
                <p>※相手が出なかった場合でも1コールとカウントされます。</p>
                <p>作成された架電数ログファイルは、録音ファイル保存先の「LOG」ディレクトリ内に日付ごとに保存されます。</p>
                <div class="ashura__function_item_image"><img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-4.png" alt=""></div>
                <p class="kaden">架電数ログのファイル名の形式は「コンピューター名.txt」となっています。</p>
                <div class="ashura__function_item_image"><img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-5.png" alt=""></div>
                <p class="kaden">架電数ログファイルの内容は、ユーザー名と架電数をCSV形式で書き出したものとなります。
                </p>
                <p>1台のPCを複数ユーザーで使用している場合、ファイルにはユーザーごとの架電ログが書き出されます。</p>
            </div>
        </div>
    </section>
    <!-- ----------------- -->
    <section class="ashura__system">
        <div class="ashura__system_inner">
            <div class="ashura__sec_title">
                <h3>システム構成</h3>
            </div>
            <p>阿修羅ダイヤラーは全てアナログ回線収容となります。</p>
            <div class="ashura__system_item">
                <div class="ashura__system_item_left">
                    <p>架電数ログ</p>
                </div>
                <div class="ashura__system_item_right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-6.png" alt="system">
                </div>
            </div>
            <div class="ashura__system_item">
                <div class="ashura__system_item_left">
                    <p>TA経由例</p>
                </div>
                <div class="ashura__system_item_right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-7.png" alt="system">
                </div>
            </div>
            <div class="ashura__system_item">
                <div class="ashura__system_item_left">
                    <p>PBX経由例</p>
                </div>
                <div class="ashura__system_item_right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/image/ashura/ashura-8.png" alt="system">
                </div>
            </div>
        </div>
    </section>
    <section class="ashura__operating">
        <div class="ashura__operating_inner">

            <div class="ashura__sec_title">
                <h3>動作環境</h3>
            </div>
            <dl>
                <dt>OS</dt>
                <dd>windows XP、Vista、7</dd>
                <dt>CPU</dt>
                <dd>1GHz以上推奨</dd>
                <dt>メモリ</dt>
                <dd>2GB以上推奨</dd>
                <dt class="border-none">HDD</dt>
                <dd class="border-none">
                    <p>NAS利用の場合：10GB程度の空き容量</p>
                    <p>NAS不使用の場合：10GB程度の空き容量</p>
                </dd>
            </dl>
            <div class="ashura__careful">
                <p>※電話回線は、ご利用席分ご用意ください。
                </p>
                <p>※File Makerはお客様にてご用意ください。</p>
            </div>
        </div>
    </section>
    <section class="ashura__plan">
        <div class="ashura__plan_item">
            <div class="ashura__plan_item_left">
                <p>ご購入</p>
            </div>
            <div class="ashura__plan_item_right">
                <p class="ashura__plan_item_right_top">１台</p>
                <b>￥65,000<span>(税別)</span></b>
                <ul>
                    <p>【付属品】</p>
                    <li>専用電話機1台</li>
                    <li>専用ヘッドセット1台</li>
                    <li>インストールCD1枚</li>
                </ul>
            </div>
        </div>
        <!--  -->
        <div class="ashura__plan_item">
            <div class="ashura__plan_item_left">
                <p>レンタル</p>
            </div>
            <div class="ashura__plan_item_right">
                <p class="ashura__plan_item_right_top">１ヶ月/１台</p>
                <b>￥10,000<span>(税別)</span></b>
                <ul>
                    <p>【付属品】</p>
                    <li>専用電話機1台</li>
                    <li>専用ヘッドセット1台</li>
                    <li>インストールCD1枚</li>
                </ul>
                <p>※最低利用期間は6ヵ月となります。</p>
            </div>
        </div>
        <div class="ashura__careful">
            <p>※商品に関するご質問は、弊社担当者までお気軽にご連絡ください。

            </p>
            <p>※弊社は「阿修羅ダイヤラー」の正規取扱代理店となります。</p>
            <p>※メーカーは、株式会社オプトエスピーとなります。</p>
            <p>※「阿修羅ダイヤラー」は株式会社オプトエスピーの登録商標となります。</p>
        </div>
    </section>
    <div class="trial">
        <p>詳しくはお問い合わせください。</p>
        <span class="material-symbols-outlined">
            fast_rewind
        </span>
    </div>
</main>
<?php get_footer() ?>