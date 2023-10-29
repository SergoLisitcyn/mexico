<?php
$reviewsCount = \common\models\Reviews::find()->where(['status' => 0])->count();
$messageCount = \common\models\Contacts::find()->where(['status' => 0])->count();

?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin/img/user-placeholder.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username;?></p>

                <a><i class="fa fa-circle text-success"></i> В сети</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Навигация', 'options' => ['class' => 'header']],
                    [
                        'label' => 'МФО',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Все МФО', 'icon' => 'circle-o', 'url' => ['/mfo/index'],],
                            ['label' => 'personales urgentes', 'icon' => 'circle-o', 'url' => ['/sort/prestamos_personales_urgentes'],],
                            ['label' => 'Prestamos rapidos', 'icon' => 'circle-o', 'url' => ['/sort/prestamos_rapidos'],],
                            ['label' => 'Prestamos en linea sin buró', 'icon' => 'circle-o', 'url' => ['/sort/prestamos_en_linea_sin_buro'],],
                            ['label' => 'Prestamos en linea', 'icon' => 'circle-o', 'url' => ['/sort/prestamos_en_linea'],],
                            ['label' => 'Préstamos P2P', 'icon' => 'circle-o', 'url' => ['/sort/p2p'],],
                            ['label' => 'Intermediarios Financieros', 'icon' => 'circle-o', 'url' => ['/sort/corredores'],],
                        ],
                    ],
                    ['label' => 'Управление блоками', 'icon' => 'home', 'url' => ['/block-management/index']],
                    ['label' => 'Адрес компании', 'icon' => 'tasks', 'url' => ['/main-contact/update?id=1#contacts']],
//                    [
//                        "label" => "Главная страница",
//                        "url" => "#",
//                        "icon" => "home",
//                        "items" => [
//                            [
//                                "label" => "Управление блоками",
//                                "url" => ["/block-management/index"],
//                            ],
//                            [
//                                "label" => "Блок Solicita",
//                                "url" => ["/main-solicita/index"],
//                            ],
//                            [
//                                "label" => "Блок О нас пишут",
//                                "url" => ["/main-about/index"],
//                            ],
//                            [
//                                "label" => "Блок Nuestros colaboradores",
//                                "url" => ["/main-partners/index"],
//                            ],
//                            [
//                                "label" => "Контакты",
//                                "url" => ["/main-contact/update?id=1"],
//                            ],
//                            [
//                                "label" => "Наша команда",
//                                "url" => ["/main-team/index"],
//                            ],
//                            [
//                                "label" => "Инфо",
//                                "url" => ["/main-info/update?id=1"],
//                            ],
//                        ],
//                    ],
                    ['label' => 'Создание страниц', 'icon' => 'file-o', 'url' => ['/pages']],
                    ['label' => 'Información precisa', 'icon' => 'info', 'url' => ['/review-information/create']],
                    ['label' => 'Меню', 'icon' => 'reorder', 'url' => ['/menu']],
                    ['label' => 'Футер Текст', 'icon' => 'text-width', 'url' => ['/footer-text/update?id=1']],
                    ['label' => 'Отзывы', 'icon' => 'comments', 'url' => ['/reviews'],'template' => '<li class="nav-item">
<a href="/admin/reviews" class="nav-link">
<i class="nav-icon far fa fa-comments"></i>
Отзывы
<span class="badge badge-info right">'.$reviewsCount.'</span>
</a>
</li>'],
                    ['label' => 'Плашки для МФО', 'icon' => 'paint-brush', 'url' => ['/block-rec']],
                    ['label' => 'SEO', 'icon' => 'area-chart', 'url' => ['/seo-tags']],
                    ['label' => 'Код счетчика', 'icon' => 'area-chart', 'url' => ['/seo-codes/update?id=1']],
                    ['label' => 'Форма обратной связи', 'icon' => 'address-book', 'url' => ['/contacts/index'],'template' => '<li class="nav-item">
<a href="/admin/contacts" class="nav-link">
<i class="nav-icon far fa fa-address-book"></i>
Форма обратной связи
<span class="badge badge-info right">'.$messageCount.'</span>
</a>
</li>'],
//                    ['label' => 'Форма обратной связи', 'icon' => 'address-book', 'url' => ['/contacts/index']],
                    [
                        "label" => "Управление пользователями",
                        "url" => "#",
                        "icon" => "users",
                        "items" => [
                            [
                                "label" => "Пользователи",
                                "url" => ["/users/index"],
                            ],
                            [
                                "label" => "Создать пользователя",
                                "url" => ["/users/create"],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
