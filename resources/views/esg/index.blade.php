@extends('layouts.website')
@section('title','Layanan ESG di Indonesia')
@section('meta_description','Layanan ESG (Environmental, Social, and Governance) membantu perusahaan memenuhi standar keberlanjutan dan tanggung jawab sosial.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase">Layanan ESG</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- ESG Services Section -->
    <section id="esg-services" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-4 text-ucfirst" style="font-size: 2.5rem;">Layanan ESG di Indonesia</h2>
            <p style="font-size: 1.1rem; color: #6c757d;">
                Layanan ESG (Environmental, Social, and Governance) di Indonesia meliputi berbagai aspek yang dirancang untuk membantu perusahaan memenuhi standar keberlanjutan dan tanggung jawab sosial. Berikut adalah cakupan utama layanan ESG yang relevan:
            </p>

            <!-- Environmental -->
            <h3 class="fw-bold mt-5">1. Environmental (Lingkungan)</h3>
            <ul style="color: #6c757d;">
                <li>Pengukuran dan Pengelolaan Jejak Karbon: Menghitung, memantau, dan mengurangi emisi karbon dari operasi bisnis.</li>
                <li>Konsultasi Energi Terbarukan: Memberikan solusi untuk transisi ke sumber energi yang lebih bersih dan terbarukan.</li>
                <li>Pengelolaan Limbah dan Sumber Daya: Menerapkan strategi untuk mengelola limbah dan menggunakan sumber daya secara efisien.</li>
                <li>Sertifikasi dan Pelaporan Lingkungan: Membantu perusahaan mendapatkan sertifikasi seperti ISO 14001 dan menyusun laporan keberlanjutan.</li>
                <li>Peningkatan Keberlanjutan Proses Produksi: Menganalisis dan mengoptimalkan proses bisnis untuk mengurangi dampak lingkungan.</li>
            </ul>

            <!-- Social -->
            <h3 class="fw-bold mt-5">2. Social (Sosial)</h3>
            <ul style="color: #6c757d;">
                <li>Konsultasi CSR (Corporate Social Responsibility): Merancang dan mengelola program tanggung jawab sosial yang efektif dan berdampak.</li>
                <li>Kesejahteraan dan Keberagaman Karyawan: Menyusun kebijakan untuk meningkatkan kesejahteraan karyawan, inklusivitas, dan keberagaman.</li>
                <li>Engagement dengan Komunitas Lokal: Membangun hubungan yang harmonis dengan masyarakat sekitar operasi perusahaan.</li>
                <li>Penilaian Dampak Sosial: Mengevaluasi dampak sosial dari proyek atau operasional perusahaan terhadap masyarakat.</li>
                <li>Pelatihan dan Pengembangan Karyawan: Memberikan pelatihan untuk meningkatkan keterampilan kerja dan kesadaran keberlanjutan.</li>
            </ul>

            <!-- Governance -->
            <h3 class="fw-bold mt-5">3. Governance (Tata Kelola)</h3>
            <ul style="color: #6c757d;">
                <li>Penerapan Prinsip Tata Kelola yang Baik (Good Corporate Governance/GCG): Membantu perusahaan meningkatkan transparansi, akuntabilitas, dan integritas dalam pengambilan keputusan.</li>
                <li>Audit Kepatuhan dan Risiko: Melakukan audit untuk memastikan kepatuhan terhadap peraturan dan mengelola risiko secara efektif.</li>
                <li>Konsultasi Kebijakan Perusahaan: Membantu merancang kebijakan perusahaan yang mencerminkan standar ESG.</li>
                <li>Pengungkapan ESG (ESG Disclosure): Menyusun laporan ESG untuk memenuhi persyaratan pemangku kepentingan dan regulasi.</li>
                <li>Anti-Korupsi dan Etika Bisnis: Membantu perusahaan menerapkan program anti-korupsi dan memastikan operasi yang etis.</li>
            </ul>
        </div>
    </section>
    <!-- End ESG Services Section -->
    @include('components.share')
</main>
@endsection
