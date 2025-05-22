<?php

return [

    /**
     *
     * Terjemahan umum.
     *
     */
    'title' => 'Installer UptApp CMS',
    'next' => 'Langkah Selanjutnya',
    'back' => 'Sebelumnya',
    'finish' => 'Pasang',
    'forms' => [
        'errorTitle' => 'Terjadi kesalahan berikut:',
    ],

    /**
     *
     * Halaman beranda.
     *
     */
    'welcome' => [
        'templateTitle' => 'Selamat Datang',
        'title'   => 'Installer UptApp CMS',
        'message' => 'Panduan instalasi dan pengaturan yang mudah.',
        'next'    => 'Periksa Persyaratan',
    ],

    /**
     *
     * Halaman persyaratan.
     *
     */
    'requirements' => [
        'templateTitle' => 'Langkah 1 | Persyaratan Server',
        'title' => 'Persyaratan Server',
        'next'    => 'Periksa Izin Akses',
    ],

    /**
     *
     * Halaman izin akses.
     *
     */
    'permissions' => [
        'templateTitle' => 'Langkah 2 | Izin Akses',
        'title' => 'Izin Akses',
        'next' => 'Atur Lingkungan',
    ],

    /**
     *
     * Halaman lingkungan.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan',
            'title' => 'Pengaturan Lingkungan',
            'desc' => 'Silakan pilih cara Anda ingin mengatur file <code>.env</code> aplikasi.',
            'wizard-button' => 'Panduan Formulir',
            'classic-button' => 'Editor Teks Klasik',
        ],
        'wizard' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Panduan',
            'title' => 'Panduan <code>.env</code>',
            'tabs' => [
                'environment' => 'Lingkungan',
                'database' => 'Basis Data',
                'application' => 'Aplikasi'
            ],
            'form' => [
                'name_required' => 'Nama lingkungan wajib diisi.',
                'app_name_label' => 'Nama Aplikasi',
                'app_name_placeholder' => 'Nama Aplikasi',
                'app_environment_label' => 'Lingkungan Aplikasi',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Pengembangan',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Produksi',
                'app_environment_label_other' => 'Lainnya',
                'app_environment_placeholder_other' => 'Masukkan lingkungan Anda...',
                'app_debug_label' => 'Debug Aplikasi',
                'app_debug_label_true' => 'Ya',
                'app_debug_label_false' => 'Tidak',
                'app_log_level_label' => 'Tingkat Log Aplikasi',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'URL Aplikasi',
                'app_url_placeholder' => 'URL Aplikasi',
                'db_connection_label' => 'Jenis Koneksi Basis Data',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Basis Data',
                'db_host_placeholder' => 'Host Basis Data',
                'db_port_label' => 'Port Basis Data',
                'db_port_placeholder' => 'Port Basis Data',
                'db_name_label' => 'Nama Basis Data',
                'db_name_placeholder' => 'Nama Basis Data',
                'db_username_label' => 'Nama Pengguna Basis Data',
                'db_username_placeholder' => 'Nama Pengguna Basis Data',
                'db_password_label' => 'Kata Sandi Basis Data',
                'db_password_placeholder' => 'Kata Sandi Basis Data',

                'app_tabs' => [
                    'more_info' => 'Informasi Tambahan',
                    'broadcasting_title' => 'Broadcast, Cache, Sesi, &amp; Antrian',
                    'broadcasting_label' => 'Driver Broadcast',
                    'broadcasting_placeholder' => 'Driver Broadcast',
                    'cache_label' => 'Driver Cache',
                    'cache_placeholder' => 'Driver Cache',
                    'session_label' => 'Driver Sesi',
                    'session_placeholder' => 'Driver Sesi',
                    'queue_label' => 'Driver Antrian',
                    'queue_placeholder' => 'Driver Antrian',
                    'redis_label' => 'Driver Redis',
                    'redis_host' => 'Host Redis',
                    'redis_password' => 'Kata Sandi Redis',
                    'redis_port' => 'Port Redis',

                    'mail_label' => 'Surat',
                    'mail_driver_label' => 'Driver Surat',
                    'mail_driver_placeholder' => 'Driver Surat',
                    'mail_host_label' => 'Host Surat',
                    'mail_host_placeholder' => 'Host Surat',
                    'mail_port_label' => 'Port Surat',
                    'mail_port_placeholder' => 'Port Surat',
                    'mail_username_label' => 'Nama Pengguna Surat',
                    'mail_username_placeholder' => 'Nama Pengguna Surat',
                    'mail_password_label' => 'Kata Sandi Surat',
                    'mail_password_placeholder' => 'Kata Sandi Surat',
                    'mail_encryption_label' => 'Enkripsi Surat',
                    'mail_encryption_placeholder' => 'Enkripsi Surat',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'ID Aplikasi Pusher',
                    'pusher_app_id_palceholder' => 'ID Aplikasi Pusher',
                    'pusher_app_key_label' => 'Kunci Aplikasi Pusher',
                    'pusher_app_key_palceholder' => 'Kunci Aplikasi Pusher',
                    'pusher_app_secret_label' => 'Rahasia Aplikasi Pusher',
                    'pusher_app_secret_palceholder' => 'Rahasia Aplikasi Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Atur Basis Data',
                    'setup_application' => 'Atur Aplikasi',
                    'install' => 'Pasang',
                ],
                'db_connection_failed' => 'Gagal menghubungkan ke basis data, periksa detail koneksi Anda',
            ],
        ],
        'classic' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Editor Klasik',
            'title' => 'Editor Lingkungan Klasik',
            'save' => 'Simpan .env',
            'back' => 'Gunakan Form Wizard',
            'install' => 'Simpan dan Pasang',
        ],
        'success' => 'Pengaturan file .env Anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan file .env, harap buat secara manual.',
    ],

    'install' => 'Pasang',

    /**
     *
     * Log setelah instalasi.
     *
     */
    'installed' => [
        'success_log_message' => 'Installer Laravel berhasil DIPASANG pada ',
    ],

    /**
     *
     * Halaman akhir.
     *
     */
    'final' => [
        'title' => 'Instalasi Selesai',
        'templateTitle' => 'Instalasi Selesai',
        'finished' => 'UptApp berhasil dipasang.',
        'migration' => 'Output Konsol Migrasi &amp; Seed:',
        'console' => 'Output Konsol Aplikasi:',
        'log' => 'Log Instalasi:',
        'env' => 'File .env Final:',
        'exit' => 'Masuk ke Dashboard UptApp',
    ],

    /**
     *
     * Terjemahan pembaruan.
     *
     */
    'updater' => [

        'title' => 'Updater Laravel',

        'welcome' => [
            'title'   => 'Selamat Datang di Updater',
            'message' => 'Selamat datang di panduan pembaruan.',
        ],

        'overview' => [
            'title'   => 'Ringkasan',
            'message' => 'Ada 1 pembaruan.|Ada :number pembaruan.',
            'install_updates' => 'Pasang Pembaruan'
        ],

        'final' => [
            'title' => 'Selesai',
            'finished' => 'Basis data aplikasi berhasil diperbarui.',
            'exit' => 'Klik di sini untuk masuk ke Dashboard Admin',
        ],

        'log' => [
            'success_message' => 'Installer Laravel berhasil DIPERBARUI pada ',
        ],
    ],

];