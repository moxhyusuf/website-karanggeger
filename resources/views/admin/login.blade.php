<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="AMIK Taruna Probolinggo">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - AMIK Taruna Probolinggo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        body.my-login-page {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .my-login-page .brand {
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 1;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }

        .my-login-page .brand img {
            width: 85%;
            height: 85%;
            object-fit: contain;
        }

        .my-login-page .card-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .my-login-page .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .my-login-page .card.fat {
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .my-login-page .card .card-title {
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 28px;
            color: #333;
            letter-spacing: -0.5px;
        }

        .my-login-page .form-group {
            margin-bottom: 20px;
        }

        .my-login-page .form-group label {
            width: 100%;
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .my-login-page .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .my-login-page .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            background: white;
        }

        .my-login-page .btn.btn-block {
            padding: 14px 10px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .my-login-page .btn.btn-block:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }

        .my-login-page .btn.btn-block:active {
            transform: translateY(0);
        }

        .my-login-page .custom-control-label {
            color: #666;
            font-size: 14px;
            font-weight: 400;
        }

        .my-login-page .custom-control-input:checked~.custom-control-label::before {
            background-color: #667eea;
            border-color: #667eea;
        }

        .my-login-page .footer {
            margin: 30px 0 0;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            font-size: 13px;
            font-weight: 300;
        }

        .my-login-page .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .my-login-page .alert-danger {
            background: #fee;
            color: #c33;
        }

        .forgot-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #764ba2;
            text-decoration: none;
        }

        .home-link {
            display: inline-block;
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            padding: 8px 20px;
            border-radius: 8px;
            background: rgba(102, 126, 234, 0.1);
        }

        .home-link:hover {
            color: #764ba2;
            text-decoration: none;
            background: rgba(102, 126, 234, 0.2);
            transform: translateY(-1px);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            padding: 4px 10px;
            font-size: 12px;
            cursor: pointer;
            border-radius: 6px;
            background: #667eea;
            color: white;
            border: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .password-toggle:hover {
            background: #764ba2;
        }

        @media screen and (max-width: 425px) {
            .my-login-page .card-wrapper {
                max-width: 95%;
            }

            .my-login-page .card.fat {
                padding: 30px 20px;
            }

            .my-login-page .card .card-title {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 320px) {
            .my-login-page .card.fat {
                padding: 20px 15px;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-wrapper {
            animation: fadeInUp 0.6s ease;
        }
    </style>
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center align-items-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="dist/img/amik.png" alt="AMIK Taruna Probolinggo" width="144">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title text-center">Selamat Datang</h4>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form method="POST" class="my-login-validation" action="{{ route('loginProses') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                    <div class="invalid-feedback">
                                        Username tidak boleh kosong
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        <a href="forgot.html" class="float-right forgot-link">
                                            Lupa Password?
                                        </a>
                                    </label>
                                    <div style="position: relative;">
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                        <div class="invalid-feedback">
                                            Password tidak boleh kosong
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Ingat Saya</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-success btn-block">
                                        Masuk
                                    </button>
                                </div>

                                <div class="form-group text-center mt-3 mb-0">
                                    <a href="{{ route('beranda') }}" class="home-link">
                                        <svg width="16" height="16" fill="currentColor" style="margin-right: 5px; vertical-align: text-bottom;" viewBox="0 0 16 16">
                                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                        </svg>
                                        Kembali ke Beranda
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2025 &mdash; AMIK Taruna Probolinggo
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        'use strict';

        $(function() {
            $("input[type='password'][data-eye]").each(function(i) {
                var $this = $(this),
                    id = 'eye-password-' + i;

                $this.wrap($("<div/>", {
                    style: 'position:relative',
                    id: id
                }));

                $this.css({
                    paddingRight: 70
                });

                $this.after($("<button/>", {
                    html: 'Tampilkan',
                    type: 'button',
                    class: 'password-toggle',
                    id: 'passeye-toggle-' + i,
                }));

                $this.after($("<input/>", {
                    type: 'hidden',
                    id: 'passeye-' + i
                }));

                var invalid_feedback = $this.parent().parent().find('.invalid-feedback');

                if (invalid_feedback.length) {
                    $this.after(invalid_feedback.clone());
                }

                $this.on("keyup paste", function() {
                    $("#passeye-" + i).val($(this).val());
                });

                $("#passeye-toggle-" + i).on("click", function() {
                    if ($this.hasClass("show")) {
                        $this.attr('type', 'password');
                        $this.removeClass("show");
                        $(this).html('Tampilkan');
                    } else {
                        $this.attr('type', 'text');
                        $this.val($("#passeye-" + i).val());
                        $this.addClass("show");
                        $(this).html('Sembunyikan');
                    }
                });
            });

            $(".my-login-validation").submit(function(e) {
                var form = $(this);
                if (form[0].checkValidity() === false) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.addClass('was-validated');
            });
        });
    </script>
</body>

</html>