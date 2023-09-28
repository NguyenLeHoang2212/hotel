@extends('client.layout.master')
@section('content')
<section class="page">
    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">cart</h2>
        </div>
    </div>
    <div data-tg-refresh="checkout" id="checkout" class="content">
		<form id="checkoutForm" method="post" data-define="{
				loadingShippingErrorMessage: 'Không thể load phí vận chuyển. Vui lòng thử lại',
				loadingReductionCodeErrorMessage: 'Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại',
				submitingCheckoutErrorMessage: 'Có lỗi xảy ra khi xử lý. Vui lòng thử lại',
				requireShipping: true,
				requireDistrict: false,
				requireWard: false,
				shouldSaveCheckoutAbandon: true}" action="/checkout/a4eb604f7a5144d1ad86054e7f0651b8" data-bind-event-submit="handleCheckoutSubmit(event)" data-bind-event-keypress="handleCheckoutKeyPress(event)" data-bind-event-change="handleCheckoutChange(event)">
			<input type="hidden" name="_method" value="patch">
			<div class="wrap">
				<main class="main">
					<header class="main__header">
						<div class="logo logo--left">



</div>
					</header>
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>

												Thông tin nhận hàng

											</h2>


													<a href="/account/login?returnUrl=/checkout/a4eb604f7a5144d1ad86054e7f0651b8">
														<i class="fa fa-user-circle-o fa-lg"></i>
														<span>Đăng nhập </span>
													</a>


										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">




													<div class="field " data-bind-class="{'field--show-floating-label': email}">
														<div class="field__input-wrapper">
															<label for="email" class="field__label">
																Email
															</label>
															<input name="email" id="email" type="email" class="field__input" data-bind="email" value="">
														</div>

													</div>



											<div class="field " data-bind-class="{'field--show-floating-label': billing.name}">
												<div class="field__input-wrapper">
													<label for="billingName" class="field__label">Họ và tên</label>
													<input name="billingName" id="billingName" type="text" class="field__input" data-bind="billing.name" value="">
												</div>

											</div>

											<div class="field " data-bind-class="{'field--show-floating-label': billing.phone}">
												<div class="field__input-wrapper field__input-wrapper--connected" data-define="{phoneInput: new InputPhone(this)}">
													<label for="billingPhone" class="field__label">
														Số điện thoại (tùy chọn)
													</label>
													<input name="billingPhone" id="billingPhone" type="tel" class="field__input" data-bind="billing.phone" value="">
													<div class="field__input-phone-region-wrapper">
														<select class="field__input select-phone-region select2-hidden-accessible" name="billingPhoneRegion" data-init-value="VN" data-select2-id="select2-data-4-s69y" tabindex="-1" aria-hidden="true"><option value="AF" data-select2-id="select2-data-6-cgqb">Afghanistan (+93)</option><option value="AL" data-select2-id="select2-data-7-mjsx">Albania (+355)</option><option value="DZ" data-select2-id="select2-data-8-3y7b">Algeria (+213)</option><option value="AD" data-select2-id="select2-data-9-vcnz">Andorra (+376)</option><option value="AO" data-select2-id="select2-data-10-2pc2">Angola (+244)</option><option value="AG" data-select2-id="select2-data-11-1nm3">Antigua and Barbuda (+1)</option><option value="AR" data-select2-id="select2-data-12-o1k2">Argentina (+54)</option><option value="AM" data-select2-id="select2-data-13-72ej">Armenia (+374)</option><option value="AU" data-select2-id="select2-data-14-d6ix">Australia (+61)</option><option value="AT" data-select2-id="select2-data-15-8mtn">Austria (+43)</option><option value="AZ" data-select2-id="select2-data-16-16dm">Azerbaijan (+994)</option><option value="BS" data-select2-id="select2-data-17-2vog">Bahamas (+1)</option><option value="BH" data-select2-id="select2-data-18-h9yj">Bahrain (+973)</option><option value="BD" data-select2-id="select2-data-19-8x6x">Bangladesh (+880)</option><option value="BB" data-select2-id="select2-data-20-kmvp">Barbados (+1)</option><option value="BY" data-select2-id="select2-data-21-3cve">Belarus (+375)</option><option value="BE" data-select2-id="select2-data-22-52vv">Belgium (+32)</option><option value="BZ" data-select2-id="select2-data-23-cm5v">Belize (+501)</option><option value="BJ" data-select2-id="select2-data-24-j9hs">Benin (+229)</option><option value="BT" data-select2-id="select2-data-25-ooz6">Bhutan (+975)</option><option value="BO" data-select2-id="select2-data-26-82df">Bolivia (+591)</option><option value="BA" data-select2-id="select2-data-27-civh">Bosnia and Herzegovina (+387)</option><option value="BW" data-select2-id="select2-data-28-l0dz">Botswana (+267)</option><option value="BR" data-select2-id="select2-data-29-xbi0">Brazil (+55)</option><option value="BN" data-select2-id="select2-data-30-p9at">Brunei (+673)</option><option value="BG" data-select2-id="select2-data-31-bahf">Bulgaria (+359)</option><option value="BF" data-select2-id="select2-data-32-ka5u">Burkina Faso (+226)</option><option value="BI" data-select2-id="select2-data-33-5zoj">Burundi (+257)</option><option value="KH" data-select2-id="select2-data-34-nejw">Cambodia (+855)</option><option value="CM" data-select2-id="select2-data-35-6q7e">Cameroon (+237)</option><option value="CA" data-select2-id="select2-data-36-mmgy">Canada (+1)</option><option value="CV" data-select2-id="select2-data-37-6wcw">Cape Verde (+238)</option><option value="CF" data-select2-id="select2-data-38-paee">Central African Republic (+236)</option><option value="TD" data-select2-id="select2-data-39-06uf">Chad (+235)</option><option value="CL" data-select2-id="select2-data-40-rzz0">Chile (+56)</option><option value="CO" data-select2-id="select2-data-41-ljaf">Colombia (+57)</option><option value="KM" data-select2-id="select2-data-42-5v54">Comoros (+269)</option><option value="CG" data-select2-id="select2-data-43-77hv">Congo-Brazzaville (+242)</option><option value="CK" data-select2-id="select2-data-44-3d3h">Congo-Kinshasa (+682)</option><option value="CR" data-select2-id="select2-data-45-di02">Costa Rica (+506)</option><option value="CD" data-select2-id="select2-data-46-62cu">Côte d'Ivoire (+243)</option><option value="HR" data-select2-id="select2-data-47-jqa9">Croatia (+385)</option><option value="CU" data-select2-id="select2-data-48-51jz">Cuba (+53)</option><option value="CY" data-select2-id="select2-data-49-u66l">Cyprus (+357)</option><option value="CZ" data-select2-id="select2-data-50-56sq">Czech Republic (+420)</option><option value="DK" data-select2-id="select2-data-51-0txw">Denmark (+45)</option><option value="DJ" data-select2-id="select2-data-52-zcop">Djibouti (+253)</option><option value="DM" data-select2-id="select2-data-53-tvi0">Dominica (+1)</option><option value="DO" data-select2-id="select2-data-54-m2m6">Dominican Republic (+1)</option><option value="TL" data-select2-id="select2-data-55-qeen">East Timor (+670)</option><option value="EC" data-select2-id="select2-data-56-xau9">Ecuador (+593)</option><option value="EG" data-select2-id="select2-data-57-rqvj">Egypt (+20)</option><option value="SV" data-select2-id="select2-data-58-zv1w">El Salvador (+503)</option><option value="GQ" data-select2-id="select2-data-59-a8yt">Equatorial Guinea (+240)</option><option value="ER" data-select2-id="select2-data-60-1oej">Eritrea (+291)</option><option value="EE" data-select2-id="select2-data-61-gsh7">Estonia (+372)</option><option value="ET" data-select2-id="select2-data-62-8pcq">Ethiopia (+251)</option><option value="FJ" data-select2-id="select2-data-63-3c0p">Fiji (+679)</option><option value="FI" data-select2-id="select2-data-64-d647">Finland (+358)</option><option value="FR" data-select2-id="select2-data-65-40f3">France (+33)</option><option value="GA" data-select2-id="select2-data-66-ot8a">Gabon (+241)</option><option value="GM" data-select2-id="select2-data-67-68dk">Gambia (+220)</option><option value="GE" data-select2-id="select2-data-68-u4sk">Georgia (+995)</option><option value="DE" data-select2-id="select2-data-69-c3li">Germany (+49)</option><option value="GH" data-select2-id="select2-data-70-u42w">Ghana (+233)</option><option value="GR" data-select2-id="select2-data-71-hiq8">Greece (+30)</option><option value="GD" data-select2-id="select2-data-72-s6o1">Grenada (+1)</option><option value="GT" data-select2-id="select2-data-73-elpy">Guatemala (+502)</option><option value="GN" data-select2-id="select2-data-74-2syd">Guinea (+224)</option><option value="GW" data-select2-id="select2-data-75-ighx">Guinea-Bissau (+245)</option><option value="GY" data-select2-id="select2-data-76-kkqr">Guyana (+592)</option><option value="HT" data-select2-id="select2-data-77-fk4h">Haiti (+509)</option><option value="HN" data-select2-id="select2-data-78-0i6n">Honduras (+504)</option><option value="HK" data-select2-id="select2-data-79-1rh2">Hong Kong (+852)</option><option value="HU" data-select2-id="select2-data-80-26i8">Hungary (+36)</option><option value="IS" data-select2-id="select2-data-81-jspw">Iceland (+354)</option><option value="IN" data-select2-id="select2-data-82-jds5">India (+91)</option><option value="ID" data-select2-id="select2-data-83-ckg1">Indonesia (+62)</option><option value="IR" data-select2-id="select2-data-84-yl9m">Iran (+98)</option><option value="IQ" data-select2-id="select2-data-85-ur8y">Iraq (+964)</option><option value="IE" data-select2-id="select2-data-86-5iy3">Ireland (+353)</option><option value="IL" data-select2-id="select2-data-87-6aux">Israel (+972)</option><option value="IT" data-select2-id="select2-data-88-15ad">Italy (+39)</option><option value="JM" data-select2-id="select2-data-89-60tv">Jamaica (+1)</option><option value="JP" data-select2-id="select2-data-90-0tzl">Japan (Nippon) (+81)</option><option value="JO" data-select2-id="select2-data-91-n2pe">Jordan (+962)</option><option value="KZ" data-select2-id="select2-data-92-5h42">Kazakhstan (+7)</option><option value="KE" data-select2-id="select2-data-93-nhrs">Kenya (+254)</option><option value="KI" data-select2-id="select2-data-94-a6wl">Kiribati (+686)</option><option value="KP" data-select2-id="select2-data-95-l7uc">North Korea (+850)</option><option value="XK" data-select2-id="select2-data-96-n48z">Kosovo (+383)</option><option value="KW" data-select2-id="select2-data-97-p3qh">Kuwait (+965)</option><option value="KG" data-select2-id="select2-data-98-hnlb">Kyrgyzstan (+996)</option><option value="LA" data-select2-id="select2-data-99-twfi">Laos (+856)</option><option value="LV" data-select2-id="select2-data-100-k76h">Latvia (+371)</option><option value="LB" data-select2-id="select2-data-101-vd5l">Lebanon (+961)</option><option value="LS" data-select2-id="select2-data-102-5bcl">Lesotho (+266)</option><option value="LR" data-select2-id="select2-data-103-jonw">Liberia (+231)</option><option value="LY" data-select2-id="select2-data-104-ovv6">Libya (+218)</option><option value="LI" data-select2-id="select2-data-105-fbp6">Liechtenstein (+423)</option><option value="LT" data-select2-id="select2-data-106-lgcz">Lithuania (+370)</option><option value="LU" data-select2-id="select2-data-107-f1ee">Luxembourg (+352)</option><option value="MK" data-select2-id="select2-data-108-j4qe">Macedonia (FYROM) (+389)</option><option value="MG" data-select2-id="select2-data-109-apsa">Madagascar (+261)</option><option value="MW" data-select2-id="select2-data-110-y52j">Malawi (+265)</option><option value="MY" data-select2-id="select2-data-111-z6t5">Malaysia (+60)</option><option value="MV" data-select2-id="select2-data-112-jtvz">Maldives (+960)</option><option value="ML" data-select2-id="select2-data-113-yn0l">Mali (+223)</option><option value="MT" data-select2-id="select2-data-114-cmkc">Malta (+356)</option><option value="MH" data-select2-id="select2-data-115-7fcp">Marshall Islands (+692)</option><option value="MR" data-select2-id="select2-data-116-5lx9">Mauritania (+222)</option><option value="MU" data-select2-id="select2-data-117-o7tk">Mauritius (+230)</option><option value="MX" data-select2-id="select2-data-118-syde">Mexico (+52)</option><option value="FM" data-select2-id="select2-data-119-vhl3">Micronesia (+691)</option><option value="MD" data-select2-id="select2-data-120-7eq6">Moldova (+373)</option><option value="MC" data-select2-id="select2-data-121-1scr">Monaco (+377)</option><option value="MN" data-select2-id="select2-data-122-5tbu">Mongolia (+976)</option><option value="ME" data-select2-id="select2-data-123-aviv">Montenegro (+382)</option><option value="MA" data-select2-id="select2-data-124-yhcq">Morocco (+212)</option><option value="MZ" data-select2-id="select2-data-125-vpvx">Mozambique (+258)</option><option value="MM" data-select2-id="select2-data-126-s861">Myanmar (+95)</option><option value="NA" data-select2-id="select2-data-127-slen">Namibia (+264)</option><option value="NR" data-select2-id="select2-data-128-61c1">Nauru (+674)</option><option value="NP" data-select2-id="select2-data-129-ur42">Nepal (+977)</option><option value="NL" data-select2-id="select2-data-130-evea">Netherlands (+31)</option><option value="NZ" data-select2-id="select2-data-131-oj6e">New Zealand (+64)</option><option value="NI" data-select2-id="select2-data-132-or1p">Nicaragua (+505)</option><option value="NE" data-select2-id="select2-data-133-e9os">Niger (+227)</option><option value="NG" data-select2-id="select2-data-134-aq78">Nigeria (+234)</option><option value="KR" data-select2-id="select2-data-135-tqtk">South Korea (+82)</option><option value="NC" data-select2-id="select2-data-136-jobz">New Caledonia (+687)</option><option value="NO" data-select2-id="select2-data-137-eatt">Norway (+47)</option><option value="OM" data-select2-id="select2-data-138-m6ch">Oman (+968)</option><option value="PK" data-select2-id="select2-data-139-gm9n">Pakistan (+92)</option><option value="PW" data-select2-id="select2-data-140-ryzy">Palau (+680)</option><option value="PS" data-select2-id="select2-data-141-qgq1">Palestine (+970)</option><option value="PA" data-select2-id="select2-data-142-jw5o">Panama (+507)</option><option value="PG" data-select2-id="select2-data-143-s42f">Papua New Guinea (+675)</option><option value="PY" data-select2-id="select2-data-144-zgsd">Paraguay (+595)</option><option value="PE" data-select2-id="select2-data-145-1y5j">Peru (+51)</option><option value="PH" data-select2-id="select2-data-146-am2a">Philippines (+63)</option><option value="PL" data-select2-id="select2-data-147-p3fm">Poland (+48)</option><option value="PT" data-select2-id="select2-data-148-3j6d">Portugal (+351)</option><option value="QA" data-select2-id="select2-data-149-6lb8">Qatar (+974)</option><option value="RO" data-select2-id="select2-data-150-t5k3">Romania (+40)</option><option value="RU" data-select2-id="select2-data-151-jm28">Russia (+7)</option><option value="RW" data-select2-id="select2-data-152-o2l7">Rwanda (+250)</option><option value="KN" data-select2-id="select2-data-153-8py6">Saint Kitts and Nevis (+1)</option><option value="LC" data-select2-id="select2-data-154-79z0">Saint Lucia (+1)</option><option value="VC" data-select2-id="select2-data-155-yfql">Saint Vincent and the Grenadines (+1)</option><option value="WS" data-select2-id="select2-data-156-c5u8">Samoa (+685)</option><option value="SM" data-select2-id="select2-data-157-fsso">San Marino (+378)</option><option value="ST" data-select2-id="select2-data-158-bz0o">Sao Tome and Principe (+239)</option><option value="SA" data-select2-id="select2-data-159-g45d">Saudi Arabia (+966)</option><option value="SS" data-select2-id="select2-data-160-0aio">South Sudan (+211)</option><option value="SN" data-select2-id="select2-data-161-nvf9">Senegal (+221)</option><option value="RS" data-select2-id="select2-data-162-jutf">Serbia (+381)</option><option value="SC" data-select2-id="select2-data-163-gv8t">Seychelles (+248)</option><option value="SL" data-select2-id="select2-data-164-j22a">Sierra Leone (+232)</option><option value="SG" data-select2-id="select2-data-165-beqk">Singapore (+65)</option><option value="SH" data-select2-id="select2-data-166-t1nl">Saint Helena (+290)</option><option value="SK" data-select2-id="select2-data-167-p01a">Slovakia (+421)</option><option value="SI" data-select2-id="select2-data-168-txl2">Slovenia (+386)</option><option value="SB" data-select2-id="select2-data-169-w5ty">Solomon Islands (+677)</option><option value="SO" data-select2-id="select2-data-170-bfo7">Somalia (+252)</option><option value="SJ" data-select2-id="select2-data-171-he4e">Svalbard and Jan Mayen (+47)</option><option value="ZA" data-select2-id="select2-data-172-7bqe">South Africa (+27)</option><option value="ES" data-select2-id="select2-data-173-t0mq">Spain (+34)</option><option value="LK" data-select2-id="select2-data-174-cl7o">Sri Lanka (+94)</option><option value="SD" data-select2-id="select2-data-175-oi6y">Sudan (+249)</option><option value="SR" data-select2-id="select2-data-176-s402">Suriname (+597)</option><option value="SZ" data-select2-id="select2-data-177-yuma">Swaziland (+268)</option><option value="SE" data-select2-id="select2-data-178-lk02">Sweden (+46)</option><option value="CH" data-select2-id="select2-data-179-1jcd">Switzerland (+41)</option><option value="SY" data-select2-id="select2-data-180-8i3p">Syria (+963)</option><option value="TJ" data-select2-id="select2-data-181-pfqo">Tajikistan (+992)</option><option value="TZ" data-select2-id="select2-data-182-c9hl">Tanzania (+255)</option><option value="TH" data-select2-id="select2-data-183-e3xd">Thailand (+66)</option><option value="TG" data-select2-id="select2-data-184-nu2r">Togo (+228)</option><option value="TO" data-select2-id="select2-data-185-pl4m">Tonga (+676)</option><option value="TK" data-select2-id="select2-data-186-cqjv">Tokelau (+690)</option><option value="TT" data-select2-id="select2-data-187-fmvw">Trinidad and Tobago (+1)</option><option value="TN" data-select2-id="select2-data-188-isxk">Tunisia (+216)</option><option value="TR" data-select2-id="select2-data-189-d8oz">Turkey (+90)</option><option value="CN" data-select2-id="select2-data-190-t8jh">China (+86)</option><option value="TM" data-select2-id="select2-data-191-iodh">Turkmenistan (+993)</option><option value="TV" data-select2-id="select2-data-192-lhuv">Tuvalu (+688)</option><option value="UG" data-select2-id="select2-data-193-8nqp">Uganda (+256)</option><option value="UA" data-select2-id="select2-data-194-udnw">Ukraine (+380)</option><option value="AE" data-select2-id="select2-data-195-u9ik">United Arab Emirates (+971)</option><option value="GB" data-select2-id="select2-data-196-awxi">United Kingdom (+44)</option><option value="US" data-select2-id="select2-data-197-decn">United States (+1)</option><option value="UY" data-select2-id="select2-data-198-p1w9">Uruguay (+598)</option><option value="UZ" data-select2-id="select2-data-199-flc8">Uzbekistan (+998)</option><option value="VU" data-select2-id="select2-data-200-9g0p">Vanuatu (+678)</option><option value="VA" data-select2-id="select2-data-201-21qj">Vatican (+39)</option><option value="VE" data-select2-id="select2-data-202-7eng">Venezuela (+58)</option><option value="VN" data-select2-id="select2-data-203-9who">Vietnam (+84)</option><option value="EH" data-select2-id="select2-data-204-gjzh">Western Sahara (+212)</option><option value="YE" data-select2-id="select2-data-205-5el4">Yemen (+967)</option><option value="ZM" data-select2-id="select2-data-206-dhoc">Zambia (+260)</option><option value="ZW" data-select2-id="select2-data-207-e54p">Zimbabwe (+263)</option><option value="TW" data-select2-id="select2-data-208-cx4j">Taiwan (+886)</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-vjuk" style="width: 56px;"><span class="selection"><span class="select2-selection select2-selection--single select2-phone-region" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingPhoneRegion-zv-container"><span class="select2-selection__rendered" id="select2-billingPhoneRegion-zv-container" role="textbox" aria-readonly="true" title="Vietnam (+84)"><span class="fi fi-vn"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>

											</div>


											<div class="field " data-bind-class="{'field--show-floating-label': billing.address}">
												<div class="field__input-wrapper">
													<label for="billingAddress" class="field__label">
														Địa chỉ (tùy chọn)
													</label>
													<input name="billingAddress" id="billingAddress" type="text" class="field__input" data-bind="billing.address" value="">
												</div>

											</div>


											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingProvince" class="field__label">Tỉnh thành</label>
													<select name="billingProvince" id="billingProvince" size="1" class="field__input field__input--select select2-hidden-accessible" data-bind="billing.province" value="" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince" tabindex="-1" aria-hidden="true"><option value="" hidden="" data-select2-id="select2-data-209-z1jx">---</option><option value="1">Hà Nội</option><option value="2">TP Hồ Chí Minh</option><option value="3">An Giang</option><option value="4">Bà Rịa-Vũng Tàu</option><option value="5">Bắc Giang</option><option value="6">Bắc Kạn</option><option value="7">Bạc Liêu</option><option value="8">Bắc Ninh</option><option value="9">Bến Tre</option><option value="10">Bình Dương</option><option value="11">Bình Định</option><option value="12">Bình Phước</option><option value="13">Bình Thuận</option><option value="14">Cà Mau</option><option value="15">Cao Bằng</option><option value="16">Cần Thơ</option><option value="17">Đà Nẵng</option><option value="18">Đắk Lắk</option><option value="19">Đắk Nông</option><option value="20">Điện Biên</option><option value="21">Đồng Nai</option><option value="22">Đồng Tháp</option><option value="23">Gia Lai</option><option value="24">Hà Giang</option><option value="25">Hà Nam</option><option value="26">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="28">Hải Phòng</option><option value="29">Hậu Giang</option><option value="30">Hòa Bình</option><option value="31">Hưng Yên</option><option value="32">Khánh Hòa</option><option value="33">Kiên Giang</option><option value="34">Kon Tum</option><option value="35">Lai Châu</option><option value="36">Lâm Đồng</option><option value="37">Lạng Sơn</option><option value="38">Lào Cai</option><option value="39">Long An</option><option value="40">Nam Định</option><option value="41">Nghệ An</option><option value="42">Ninh Bình</option><option value="43">Ninh Thuận</option><option value="44">Phú Thọ</option><option value="45">Phú Yên</option><option value="46">Quảng Bình</option><option value="47">Quảng Nam</option><option value="48">Quảng Ngãi</option><option value="49">Quảng Ninh</option><option value="50">Quảng Trị</option><option value="51">Sóc Trăng</option><option value="52">Sơn La</option><option value="53">Tây Ninh</option><option value="54">Thái Bình</option><option value="55">Thái Nguyên</option><option value="56">Thanh Hóa</option><option value="57">Thừa Thiên Huế</option><option value="58">Tiền Giang</option><option value="59">Trà Vinh</option><option value="60">Tuyên Quang</option><option value="61">Vĩnh Long</option><option value="62">Vĩnh Phúc</option><option value="63">Yên Bái</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-ai5d" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingProvince-container"><span class="select2-selection__rendered" id="select2-billingProvince-container" role="textbox" aria-readonly="true" title="---">---</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>

											</div>

											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingDistrict" class="field__label">
														Quận huyện (tùy chọn)
													</label>
													<select name="billingDistrict" id="billingDistrict" size="1" class="field__input field__input--select select2-hidden-accessible" value="" data-bind="billing.district" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" tabindex="-1" aria-hidden="true" disabled="disabled"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="select2-data-2-ggiq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-billingDistrict-container"><span class="select2-selection__rendered" id="select2-billingDistrict-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>

											</div>

											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingWard" class="field__label">
														Phường xã (tùy chọn)
													</label>
													<select name="billingWard" id="billingWard" size="1" class="field__input field__input--select select2-hidden-accessible" value="" data-bind="billing.ward" data-address-type="ward" data-address-zone="billing" data-select2-id="select2-data-billingWard" tabindex="-1" aria-hidden="true" disabled="disabled"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="select2-data-3-eat7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-billingWard-container"><span class="select2-selection__rendered" id="select2-billingWard-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>

											</div>




										</div>
									</div>
								</section>

								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{'field--show-floating-label': note}">
										<div class="field__input-wrapper">
											<label for="note" class="field__label">
												Ghi chú (tùy chọn)
											</label>
											<textarea name="note" id="note" class="field__input" data-bind="note"></textarea>
										</div>

									</div>
								</div>

							</div>
							<div class="col col--two">








								<section class="section" data-define="{shippingMethod: ''}">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
												Vận chuyển
											</h2>
										</div>
									</div>
									<div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList" data-define="{isAddressSelecting: true, shippingMethods: []}">
										<div class="alert alert--loader spinner spinner--active hide" data-bind-show="isLoadingShippingMethod">
											<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
												<use href="#spinner"></use>
											</svg>
										</div>


										<div class="alert alert-retry alert--danger hide" data-bind-event-click="handleShippingMethodErrorRetry()" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
											<span data-bind="loadingShippingErrorMessage">Không thể load phí vận chuyển. Vui lòng thử lại</span> <i class="fa fa-refresh"></i>
										</div>


										<div class="content-box hide" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError">


										</div>

										<div class="alert alert--info" data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
											Vui lòng nhập thông tin giao hàng
										</div>
									</div>
								</section>

								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
											</h2>
										</div>
									</div>
									<div class="section__content">

										<div class="content-box" data-define="{paymentMethod: undefined}">


											<div class="content-box__row">
												<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-556568" type="radio" class="input-radio" data-bind="paymentMethod" value="556568">
													</div>
													<label for="paymentMethod-556568" class="radio__label">
														<span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--4"></i>
															</span>
														</span>
													</label>
												</div>

												<div class="content-box__row__desc hide" data-bind-show="paymentMethod == 556568">
													<p>Bạn chỉ phải thanh toán khi nhận được hàng</p>

												</div>

											</div>

										</div>
									</div>
								</section>
							</div>
						</article>
						<div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
							<button type="submit" class="btn btn-checkout spinner" data-bind-class="{'spinner--active': isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
								<span class="spinner-label">ĐẶT HÀNG</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
									<use href="#spinner"></use>
								</svg>
							</button>

							<a href="/cart" class="previous-link">
								<i class="previous-link__arrow">❮</i>
								<span class="previous-link__content">Quay về giỏ hàng</span>
							</a>

						</div>

						<div id="common-alert" data-tg-refresh="refreshError">


							<div class="alert alert--danger hide-on-desktop hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
						</div>
					</div>

				</main>
				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng (2 sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>

											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static="">
															<img src="//bizweb.dktcdn.net/thumb/thumb/100/472/947/products/sp2.jpg?v=1670338560503" alt="" class="product-thumbnail__image">
														</div>
														<span class="product-thumbnail__quantity">1</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														Bún xào thịt heo
													</span>


												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
												<td class="product__price">

													75.000₫

												</td>
											</tr>

											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static="">
															<img src="//bizweb.dktcdn.net/thumb/thumb/100/472/947/products/1.jpg?v=1670338559480" alt="" class="product-thumbnail__image">
														</div>
														<span class="product-thumbnail__quantity">1</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														Bún bò Huế
													</span>


												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
												<td class="product__price">

													95.000₫

												</td>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--discount-code" data-tg-refresh="refreshDiscount" id="discountCode">
									<h3 class="visually-hidden">Mã khuyến mại</h3>
									<div class="edit_checkout animate-floating-labels">
										<div class="fieldset">
											<div class="field ">
												<div class="field__input-btn-wrapper">
													<div class="field__input-wrapper">
														<label for="reductionCode" class="field__label">Nhập mã giảm giá</label>
														<input name="reductionCode" id="reductionCode" type="text" class="field__input" autocomplete="off" data-bind-disabled="isLoadingReductionCode" data-bind-event-keypress="handleReductionCodeKeyPress(event)" data-define="{reductionCode: null}" data-bind="reductionCode">
													</div>
													<button class="field__input-btn btn spinner btn--disabled" type="button" data-bind-disabled="isLoadingReductionCode || !reductionCode" data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}" data-bind-event-click="applyReductionCode()" disabled="">
														<span class="spinner-label">Áp dụng</span>
														<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
															<use href="#spinner"></use>
														</svg>
													</button>
												</div>

												<p class="field__message field__message--error field__message--error-always-show hide" data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError" data-bind="loadingReductionCodeErrorMessage">Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại</p>
											</div>

										</div>
									</div>
								</div>
								<div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element" data-define="{subTotalPriceText: '170.000₫'}" data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td class="total-line__price">170.000₫</td>
											</tr>

											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price" data-bind="getTextShippingPrice()">-</td>
											</tr>

										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">
													<span class="payment-due__price" data-bind="getTextTotalPrice()">170.000₫</span>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
									<button type="submit" class="btn btn-checkout spinner" data-bind-class="{'spinner--active': isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
										<span class="spinner-label">ĐẶT HÀNG</span>
										<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
											<use href="#spinner"></use>
										</svg>
									</button>


									<a href="/cart" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>

								</div>
								<div id="common-alert-sidebar" data-tg-refresh="refreshError">


									<div class="alert alert--danger hide-on-mobile hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</form>

		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="spinner">
				<svg viewBox="0 0 30 30">
					<circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
						<animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15" dur="0.7s" repeatCount="indefinite"></animateTransform>
					</circle>
				</svg>
			</symbol>
		</svg>
	</div>
</section>
@endsection
