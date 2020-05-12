/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

((win, doc, $) => {
    const vm = {
        init() {
            vm.showAlert();
            vm.confirmDeleteMahasiswa();
        },
        showAlert() {
            if (!alert || !alert.message || !alert.type) {
                return;
            }
            if (['info', 'success', 'error', 'danger', 'question', 'warning'].indexOf(alert.type) < 0) {
                alert.type = 'info';
            }
            switch (alert.type) {
                case 'success':
                    alert.title = 'Sukses';
                    break;
                case 'error':
                case 'danger':
                    alert.type = 'error';
                    alert.title = 'Kesalahan';
                    break;
                case 'question':
                case 'warning':
                    alert.type = 'warning';
                    alert.title = 'Perhatian';
                    break;

                default:
                    alert.title = 'Info';
                    break;
            }
            Swal.fire(alert.title, alert.message, alert.type);
        },
        confirmDeleteMahasiswa() {
            $('.delete-mahasiswa').submit((e, data) => {
                if (data && data.confirmed) {
                    return;
                }

                e.preventDefault();

                Swal.fire({
                    title: 'Yakin menghapus?',
                    text: 'Aksi ini tidak dapat dikembalikan!',
                    icon: 'warning',
                    showCancelButton: true,
                    focusCancel: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.value) {
                        $(e.target).trigger('submit', {
                            confirmed: true
                        });
                    }
                  });
            });
        }
    };

    $(doc).ready(vm.init);
})(window, document, jQuery);
