{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'Trang chủ')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

{{-- Đặt class cho body --}}
@section('page', 'home-page')

@section('content')
<main class="container">
    <section class="row banner-section">
        <div class="banner__panel">
            <img class="image" src="/images/banner.png" alt="">
        </div>
    </section>
    <section class="row about-section">
        <div class="col-md-3">
            <div class="about__info text-center">
                <div class="main-title">VỀ CHÚNG TÔI</div>
                <button type="button" class="btn btn-warning">XEM THÊM</button>
            </div>
        </div>
        <div class="col-md-6">
            <p class="fw-bold">CÔNG TY TNHH SẢN XUẤT VÀ DỊCH VỤ AN KHÁNH (AKS-VINA)</p>
            <p class="about__description">
                Với đội ngũ kỹ sư, kỹ thuật viên có chuyên môn sâu, nhiều kinh nghiệm thực tiễn, chuyên nghiệp, sáng tạo, được đào tạo bài bản trong lĩnh vực
                chế tạo máy, lắp máy,bảo trì thiết bị nhà máy công nghiệp, thi công hệ thống M&E, cùng với phương châm phục vụ Khách hàng:"Suy nghĩ thông minh,
                làm việc ổn định, đáp ứng đúng tiến độ", AKS-VINA luôn mang đến cho khách hàng sản phẩm tốt nhất, chất lượng cao nhất, giá thành cạnh tranh nhất,
                góp phần tiết kiệm chi phí đầu tư cho Quý Doanh nghiệp
            </p>

        </div>
        <div class="col-md-3">
            <div class="about__director text-center">
                <div class="about__director-name">Đỗ Quốc Khánh</div>
                <div class="about__director-name">Giám đốc, AKS-VINA</div>
                <div class="about__director-image">
                    <img src="/images/avatar_director.png" class="img-responsive" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section class="row service-section">
        <div class="col-md-3">
            <div class="service__content">
                <p class="main-title">DỊCH VỤ <span class="color-2">CHÍNH</span></p>
                <p>
                    AKS-VINA đã tích lũy nhiều kinh nghiệm và thành công thông qua các dự án mà AKS-VINA đã thực hiện, qua đó luôn nhận được sự tín nhiệm của khách hàng.
                    AKS-VINA luôn phấn đấu không ngừng nâng cao và giữ vững thế mạnh.
                </p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="service__list">
                <div class="service__item">
                    <img src="/images/service_manufacturing.png" class="image" alt="Image">
                    <div class="service__item-desc bg-color-10">
                        <a href="#" class="service__item-name sub-title">Sản xuất</a>
                        <p>AKS-VINA đã tích lũy nhiều kinh nghiệm và thành công thông qua các dự án mà AKS-VINA đã thực hiện, qua đó luôn nhận ...</p>
                    </div>
                </div>
                <div class="service__item">
                    <img src="/images/service_item.png" class="image" alt="Image">
                    <div class="service__item-desc bg-color-10">
                        <a href="#" class="service__item-name sub-title">Dịch vụ</a>
                        <p>AKS-VINA đã tích lũy nhiều kinh nghiệm và thành công thông qua các dự án mà AKS-VINA đã thực hiện, qua đó luôn nhận ...</p>
                    </div>
                </div>
                <div class="service__item">
                    <img src="/images/service_commerce.png" class="image" alt="Image">
                    <div class="service__item-desc bg-color-10">
                        <a href="#" class="service__item-name sub-title">Thương mại</a>
                        <p>AKS-VINA đã tích lũy nhiều kinh nghiệm và thành công thông qua các dự án mà AKS-VINA đã thực hiện, qua đó luôn nhận ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row feature-section">
        <div class="text-center">
            <p class="main-title">TẠI SAO CHỌN <span class="color-2">CHÚNG TÔI</span></p>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="feature__item text-center">
                <div class="feature__img">
                    <img src="/images/feature_highlevel.svg" class="img-responsive" alt="Image">
                </div>
                <div class="feature__item-content">
                    <p class="sub-title">Đội ngũ có trình độ chuyên môn cao</p>
                    <p>Nhân viên và kỹ sư Công ty AKS-VINA đều có trình độ chuyên môn cao để đảm nhiệm các nhiệm vụ khác nhau từ cơ bản đến phức tạp
                        liên quan đến máy móc dây chuyền tự động hóa.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="feature__item text-center">
                <div class="feature__img">
                    <img src="/images/feature_device.svg" class="img-responsive" alt="Image">
                </div>
                <div class="feature__item-content">
                    <p class="sub-title">Trang thiết bị, máy móc hiện đại</p>
                    <p>Chúng tôi có sự am hiểu rõ ràng về các dạng máy khác nhau, hiểu được tầm quan trọng về thiết bị công nghiệp chất lượng đối với máy móc,
                        dây chuyền sản xuất của công ty.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="feature__item text-center">
                <div class="feature__img">
                    <img src="/images/feature_support.svg" class="img-responsive" alt="Image">
                </div>
                <div class="feature__item-content">
                    <p class="sub-title">Chế độ chăm sóc khách hàng tận tụy, chu đáo</p>
                    <p>Khi máy móc dây chuyền, dịch vụ của công ty AKS-VINA, chúng tôi cử các kỹ thuật viên của mình đến bảo dưỡng và bảo trì
                        máy móc thường xuyên cho khách hàng.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="feature__item text-center">
                <div class="feature__img">
                    <img src="/images/feature_target.svg" class="img-responsive" alt="Image">
                </div>
                <div class="feature__item-content">
                    <p class="sub-title">Vì mục tiêu "phát triển của cộng đồng"</p>
                    <p>Tấ cả quy trình lắp đặt đều xây dựng dựa trên biện pháp thi công an toàn, khắt khe trong giám sát. Vì thế, bạn sẽ yên tâm về chất lượng
                        dịch vụ mà Công ty AKS-VINA cung cấp.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="row project-section bg-color-5">
        <div class="project__title">
            <p class="color-10 main-title">NHỮNG DỰ ÁN TIÊU BIỂU</p>
            <button type="button" class="btn btn-warning">Xem tất cả dự án</button>
        </div>
        <div class="project__list">
            <div class="project__item">
                <img src="/images/project_robot.png" class="img-responsive" alt="Image">
            </div>
            <div class="project__item">
                <img src="/images/" class="img-responsive" alt="Image">
            </div>
            <div class="project__item">
                <img src="/images/" class="img-responsive" alt="Image">
            </div>
            <div class="project__item">
                <img src="/images/" class="img-responsive" alt="Image">
            </div>
        </div>

    </section>

    <section class="row partner-section text-center">
        <div class="partner__title">
            <p class="main-title">ĐỐI TÁC CỦA <span class="color-2">CHÚNG TÔI</span></p>
        </div>
        <div class="partner__list">
            <div class="partner__item">
                <img src="/images/APSV.png" class="img-fluid" alt="Image">
            </div>
            <div class="partner__item">
                <img src="/images/Jade.png" class="img-fluid" alt="Image">
            </div>
            <div class="partner__item">
                <img src="/images/DAINESE.png" class="img-fluid" alt="Image">
            </div>
            <div class="partner__item">
                <img src="/images/DENSO.png" class="img-fluid" alt="Image">
            </div>
            <div class="partner__item">
                <img src="/images/ETEK.png" class="img-fluid" alt="Image">
            </div>
            <div class="partner__item">
                <img src="/images/SMC.png" class="img-fluid" alt="Image">
            </div>
        </div>
    </section>

    <section class="row evaluation-section">
        <div class="evaluation__background-left">
            <div class="evaluation__title main-title">
                <p>ĐÁNH GIÁ CỦA<br><span class="color-2">KHÁCH HÀNG</span></p>
            </div>
        </div>
        <div class="evaluation__background-right bg-color-9"></div>

        <div class="evaluation__list">
            <div class="evaluation__item bg-color-10">
                <div>"Rất vui vì cách làm việc chuyên nghiệp của các bạn. Đánh giá cao."</div>
                <div class="evaluation__item-partner">
                    <strong>Công ty SPCL (Malaysia)</strong>
                    <p>Giám đốc, Mr Juzaidie</p>
                    <strong>Dự án setup phòng sơn công ty DENESE Thái Nguyên</strong>
                </div>
            </div>
            <div class="evaluation__item bg-color-10">
                <div>"Rất vui vì cách làm việc chuyên nghiệp của các bạn. Đánh giá cao."</div>
                <div class="evaluation__item-partner">
                    <strong>Công ty SPCL (Malaysia)</strong>
                    <p>Giám đốc, Mr Juzaidie</p>
                    <strong>Dự án setup phòng sơn công ty DENESE Thái Nguyên</strong>
                </div>
            </div>
            <div class="evaluation__item bg-color-10">
                <div>"Rất vui vì cách làm việc chuyên nghiệp của các bạn. Đánh giá cao."</div>
                <div class="evaluation__item-partner">
                    <strong>Công ty SPCL (Malaysia)</strong>
                    <p>Giám đốc, Mr Juzaidie</p>
                    <strong>Dự án setup phòng sơn công ty DENESE Thái Nguyên</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="row newsletter-section">
        <div class="newsletter__title">
            <p class="main-title">TIN TỨC <span class="color-2">MỚI NHẤT</span></p>
        </div>
        <div class="newsletter__list">
            <div class="newsletter__item">
                <div class="newsletter__item-img">
                    <img src="/images/newsletter_item_image.png" class="img-fluid" alt="Image">
                </div>
                <div class="newsletter__item-time">
                    09/06/2022
                </div>
                <div class="newsletter__item-title">
                    Tầm quan trọng của dịch vụ lắp máy công nghiệp trong dây chuyền sản xuất
                </div>
                <div class="newsletter__item-desc">
                    Nhân viên và kỹ sử Công ty AKS-VINA đều có trình độ chuyên môn cao để đảm nhiệm các...
                </div>
            </div>
            <div class="newsletter__item">
                <div class="newsletter__item-img">
                    <img src="/images/newsletter_item_image.png" class="img-fluid" alt="Image">
                </div>
                <div class="newsletter__item-time">
                    09/06/2022
                </div>
                <div class="newsletter__item-title">
                    Tầm quan trọng của dịch vụ lắp máy công nghiệp trong dây chuyền sản xuất
                </div>
                <div class="newsletter__item-desc">
                    Nhân viên và kỹ sử Công ty AKS-VINA đều có trình độ chuyên môn cao để đảm nhiệm các...
                </div>
            </div>
            <div class="newsletter__item">
                <div class="newsletter__item-img">
                    <img src="/images/newsletter_item_image.png" class="img-fluid" alt="Image">
                </div>
                <div class="newsletter__item-time">
                    09/06/2022
                </div>
                <div class="newsletter__item-title">
                    Tầm quan trọng của dịch vụ lắp máy công nghiệp trong dây chuyền sản xuất
                </div>
                <div class="newsletter__item-desc">
                    Nhân viên và kỹ sử Công ty AKS-VINA đều có trình độ chuyên môn cao để đảm nhiệm các...
                </div>
            </div>
        </div>
    </section>
</main>
@endsection