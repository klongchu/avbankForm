	    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
		    <div class="m-grid__item m-grid__item--fluid m-wrapper">
			<!-- BEGIN: Subheader -->
			<div class="m-subheader ">
			    <div class="d-flex align-items-center">
				<div class="mr-auto">
				    <h3 class="m-subheader__title ">
					Dashboard
				    </h3>
				</div>
				<div>
				    <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
					<span class="m-subheader__daterange-label">
					    <span class="m-subheader__daterange-title"></span>
					    <span class="m-subheader__daterange-date m--font-brand"></span>
					</span>
					<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
					    <i class="la la-angle-down"></i>
					</a>
				    </span>
				</div>
			    </div>
			</div>
			<!-- END: Subheader -->
			<div class="m-content">
			    <!--Begin::Section-->
			    <div class="row">
				<div class="col-xl-6">
				    <!--begin:: Widgets/Quick Stats-->
				    <div class="row m-row--full-height">
					<div class="col-sm-12 col-md-12 col-lg-6">
					    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand ">
						<div class="m-portlet__body">
						    <div class="m-widget26">
							<div class="m-widget26__number">
							    570
							    <small>
								All Sales
							    </small>
							</div>
							<div class="m-widget26__chart" style="height:90px; width: 220px;">
							    <canvas id="m_chart_quick_stats_1"></canvas>
							</div>
						    </div>
						</div>
					    </div>
					    <div class="m--space-30"></div>
					    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger ">
						<div class="m-portlet__body">
						    <div class="m-widget26">
							<div class="m-widget26__number">
							    690
							    <small>
								All Orders
							    </small>
							</div>
							<div class="m-widget26__chart" style="height:90px; width: 220px;">
							    <canvas id="m_chart_quick_stats_2"></canvas>
							</div>
						    </div>
						</div>
					    </div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
					    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
						    <div class="m-widget26">
							<div class="m-widget26__number">
							    230
							    <small>
								All Transactions
							    </small>
							</div>
							<div class="m-widget26__chart" style="height:90px; width: 220px;">
							    <canvas id="m_chart_quick_stats_3"></canvas>
							</div>
						    </div>
						</div>
					    </div>
					    <div class="m--space-30"></div>
					    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent ">
						<div class="m-portlet__body">
						    <div class="m-widget26">
							<div class="m-widget26__number">
							    470
							    <small>
								All Comissions
							    </small>
							</div>
							<div class="m-widget26__chart" style="height:90px; width: 220px;">
							    <canvas id="m_chart_quick_stats_4"></canvas>
							</div>
						    </div>
						</div>
					    </div>
					</div>
				    </div>
				    <!--end:: Widgets/Quick Stats-->
				</div>
				<div class="col-xl-6">
				    <!--begin:: Widgets/Finance Summary-->
				    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
					<div class="m-portlet__head">
					    <div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
						    <h3 class="m-portlet__head-text">
							Finance Summary
						    </h3>
						</div>
					    </div>
					    <div class="m-portlet__head-tools">
						<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
						    <li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
							    Month
							</a>
						    </li>
						    <li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
							    All Time
							</a>
						    </li>
						</ul>
					    </div>
					</div>
					<div class="m-portlet__body">
					    <div class="tab-content">
						<div class="tab-pane active">
						    <div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 450px">
							<div class="m-widget12__item">
							    <span class="m-widget12__text1">
								Annual Companies Taxes EMS
								<br>
								    <span>
									$500,000
								    </span>
							    </span>
							    <span class="m-widget12__text2">
								Next Tax Review Date
								<br>
								    <span>
									July 24,2017
								    </span>
							    </span>
							</div>
							<div class="m-widget12__item">
							    <span class="m-widget12__text1">
								Avarage Product Price
								<br>
								    <span>
									$60,70
								    </span>
							    </span>
							    <div class="m-widget12__text2">
								<div class="m-widget12__desc">
								    Satisfication Rate
								</div>
								<br>
								    <div class="m-widget12__progress">
									<div class="m-widget12__progress-sm progress m-progress--sm">
									    <div class="m-widget12__progress-bar progress-bar bg-brand" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="m-widget12__stats">
									    63%
									</span>
								    </div>
							    </div>
							</div>
							<div class="m-widget12__chart m-portlet-fit--sides" style="height:290px;">
							    <canvas id="m_chart_finance_summary"></canvas>
							</div>
						    </div>
						</div>
						<div class="tab-pane"></div>
					    </div>
					</div>
				    </div>
				    <!--end:: Widgets/Finance Summary-->
				</div>
			    </div>
			    <!--End::Section-->
			    <!--Begin::Section-->
			    <div class="row">
				<div class="col-xl-8">
				    <!--begin:: Widgets/Application Sales-->
				    <div class="m-portlet m-portlet--full-height ">
					<div class="m-portlet__head">
					    <div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
						    <h3 class="m-portlet__head-text">
							Application Sales
						    </h3>
						</div>
					    </div>
					    <div class="m-portlet__head-tools">
						<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
						    <li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
							    Last Month
							</a>
						    </li>
						    <li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
							    All Time
							</a>
						    </li>
						</ul>
					    </div>
					</div>
					<div class="m-portlet__body">
					    <div class="tab-content">
						<div class="tab-pane active" id="m_widget11_tab1_content">
						    <!--begin::Widget 11-->
						    <div class="m-widget11">
							<div class="table-responsive">
							    <!--begin::Table-->
							    <table class="table">
								<!--begin::Thead-->
								<thead>
								    <tr>
									<td class="m-widget11__label">
									    #
									</td>
									<td class="m-widget11__app">
									    Application
									</td>
									<td class="m-widget11__sales">
									    Sales
									</td>
									<td class="m-widget11__change">
									    Change
									</td>
									<td class="m-widget11__price">
									    Avg Price
									</td>
									<td class="m-widget11__total m--align-right">
									    Total
									</td>
								    </tr>
								</thead>
								<!--end::Thead-->
								<!--begin::Tbody-->
								<tbody>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Vertex 2.0
									    </span>
									    <span class="m-widget11__sub">
										Vertex To By Again
									    </span>
									</td>
									<td>
									    19,200
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
									    </div>
									</td>
									<td>
									    $63
									</td>
									<td class="m--align-right m--font-brand">
									    $14,740
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Metronic
									    </span>
									    <span class="m-widget11__sub">
										Powerful Admin Theme
									    </span>
									</td>
									<td>
									    24,310
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
									    </div>
									</td>
									<td>
									    $39
									</td>
									<td class="m--align-right m--font-brand">
									    $16,010
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Apex
									    </span>
									    <span class="m-widget11__sub">
										The Best Selling App
									    </span>
									</td>
									<td>
									    9,076
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
									    </div>
									</td>
									<td>
									    $105
									</td>
									<td class="m--align-right m--font-brand">
									    $37,200
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Cascades
									    </span>
									    <span class="m-widget11__sub">
										Design Tool
									    </span>
									</td>
									<td>
									    11,094
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
									    </div>
									</td>
									<td>
									    $16
									</td>
									<td class="m--align-right m--font-brand">
									    $8,520
									</td>
								    </tr>
								</tbody>
								<!--end::Tbody-->
							    </table>
							    <!--end::Table-->
							</div>
							<div class="m-widget11__action m--align-right">
							    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
								Generate Report
							    </button>
							</div>
						    </div>
						    <!--end::Widget 11-->
						</div>
						<div class="tab-pane" id="m_widget11_tab2_content">
						    <!--begin::Widget 11-->
						    <div class="m-widget11">
							<div class="table-responsive">
							    <!--begin::Table-->
							    <table class="table">
								<!--begin::Thead-->
								<thead>
								    <tr>
									<td class="m-widget11__label">
									    #
									</td>
									<td class="m-widget11__app">
									    Application
									</td>
									<td class="m-widget11__sales">
									    Sales
									</td>
									<td class="m-widget11__change">
									    Change
									</td>
									<td class="m-widget11__price">
									    Avg Price
									</td>
									<td class="m-widget11__total m--align-right">
									    Total
									</td>
								    </tr>
								</thead>
								<!--end::Thead-->
								<!--begin::Tbody-->
								<tbody>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Loop
									    </span>
									    <span class="m-widget11__sub">
										CRM System
									    </span>
									</td>
									<td>
									    19,200
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
									    </div>
									</td>
									<td>
									    $63
									</td>
									<td class="m--align-right m--font-brand">
									    $34,740
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Selto
									    </span>
									    <span class="m-widget11__sub">
										Powerful Website Builder
									    </span>
									</td>
									<td>
									    24,310
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
									    </div>
									</td>
									<td>
									    $39
									</td>
									<td class="m--align-right m--font-brand">
									    $46,010
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Jippo
									    </span>
									    <span class="m-widget11__sub">
										The Best Selling App
									    </span>
									</td>
									<td>
									    9,076
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
									    </div>
									</td>
									<td>
									    $105
									</td>
									<td class="m--align-right m--font-brand">
									    $67,800
									</td>
								    </tr>
								    <tr>
									<td>
									    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
										<input type="checkbox">
										    <span></span>
									    </label>
									</td>
									<td>
									    <span class="m-widget11__title">
										Verto
									    </span>
									    <span class="m-widget11__sub">
										Web Development Tool
									    </span>
									</td>
									<td>
									    11,094
									</td>
									<td>
									    <div class="m-widget11__chart" style="height:50px; width: 100px">
										<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
										<canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
									    </div>
									</td>
									<td>
									    $16
									</td>
									<td class="m--align-right m--font-brand">
									    $18,520
									</td>
								    </tr>
								</tbody>
								<!--end::Tbody-->
							    </table>
							    <!--end::Table-->
							</div>
							<div class="m-widget11__action m--align-right">
							    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
								Generate Report
							    </button>
							</div>
						    </div>
						    <!--end::Widget 11-->
						</div>
					    </div>
					</div>
				    </div>
				    <!--end:: Widgets/Application Sales-->
				</div>
				<div class="col-xl-4">
				    <!--begin:: Widgets/Latest Updates-->
				    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
					<div class="m-portlet__head">
					    <div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
						    <h3 class="m-portlet__head-text">
							Latest Updates
						    </h3>
						</div>
					    </div>
					    <div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
						    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
							<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
							    Today
							</a>
							<div class="m-dropdown__wrapper">
							    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							    <div class="m-dropdown__inner">
								<div class="m-dropdown__body">
								    <div class="m-dropdown__content">
									<ul class="m-nav">
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-share"></i>
										    <span class="m-nav__link-text">
											Activity
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-chat-1"></i>
										    <span class="m-nav__link-text">
											Messages
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-info"></i>
										    <span class="m-nav__link-text">
											FAQ
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
										    <span class="m-nav__link-text">
											Support
										    </span>
										</a>
									    </li>
									</ul>
								    </div>
								</div>
							    </div>
							</div>
						    </li>
						</ul>
					    </div>
					</div>
					<div class="m-portlet__body">
					    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
						<div class="m-widget4__item">
						    <div class="m-widget4__ext">
							<a href="#" class="m-widget4__icon m--font-brand">
							    <i class="flaticon-interface-3"></i>
							</a>
						    </div>
						    <div class="m-widget4__info">
							<span class="m-widget4__text">
							    Make Metronic Great Again
							</span>
						    </div>
						    <div class="m-widget4__ext">
							<span class="m-widget4__number m--font-accent">
							    +500
							</span>
						    </div>
						</div>
						<div class="m-widget4__item">
						    <div class="m-widget4__ext">
							<a href="#" class="m-widget4__icon m--font-brand">
							    <i class="flaticon-folder-4"></i>
							</a>
						    </div>
						    <div class="m-widget4__info">
							<span class="m-widget4__text">
							    Green Maker Team
							</span>
						    </div>
						    <div class="m-widget4__ext">
							<span class="m-widget4__stats m--font-info">
							    <span class="m-widget4__number m--font-accent">
								-64
							    </span>
							</span>
						    </div>
						</div>
						<div class="m-widget4__item">
						    <div class="m-widget4__ext">
							<a href="#" class="m-widget4__icon m--font-brand">
							    <i class="flaticon-line-graph"></i>
							</a>
						    </div>
						    <div class="m-widget4__info">
							<span class="m-widget4__text">
							    Make Apex Great Again
							</span>
						    </div>
						    <div class="m-widget4__ext">
							<span class="m-widget4__stats m--font-info">
							    <span class="m-widget4__number m--font-accent">
								+1080
							    </span>
							</span>
						    </div>
						</div>
						<div class="m-widget4__item m-widget4__item--last">
						    <div class="m-widget4__ext">
							<a href="#" class="m-widget4__icon m--font-brand">
							    <i class="flaticon-diagram"></i>
							</a>
						    </div>
						    <div class="m-widget4__info">
							<span class="m-widget4__text">
							    A Programming Language
							</span>
						    </div>
						    <div class="m-widget4__ext">
							<span class="m-widget4__stats m--font-info">
							    <span class="m-widget4__number m--font-accent">
								+19
							    </span>
							</span>
						    </div>
						</div>
						<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
						    <canvas id="m_chart_latest_updates"></canvas>
						</div>
					    </div>
					</div>
				    </div>
				    <!--end:: Widgets/Latest Updates-->
				</div>
			    </div>
			    <!--End::Section-->
			    <!--Begin::Section-->
			    <div class="row">
				<div class="col-xl-6 col-lg-12">
				    <!--Begin::Portlet-->
				    <div class="m-portlet  m-portlet--full-height ">
					<div class="m-portlet__head">
					    <div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
						    <h3 class="m-portlet__head-text">
							Recent Activities
						    </h3>
						</div>
					    </div>
					    <div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
						    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
							<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
							    <i class="la la-ellipsis-h m--font-brand"></i>
							</a>
							<div class="m-dropdown__wrapper">
							    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							    <div class="m-dropdown__inner">
								<div class="m-dropdown__body">
								    <div class="m-dropdown__content">
									<ul class="m-nav">
									    <li class="m-nav__section m-nav__section--first">
										<span class="m-nav__section-text">
										    Quick Actions
										</span>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-share"></i>
										    <span class="m-nav__link-text">
											Activity
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-chat-1"></i>
										    <span class="m-nav__link-text">
											Messages
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-info"></i>
										    <span class="m-nav__link-text">
											FAQ
										    </span>
										</a>
									    </li>
									    <li class="m-nav__item">
										<a href="" class="m-nav__link">
										    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
										    <span class="m-nav__link-text">
											Support
										    </span>
										</a>
									    </li>
									    <li class="m-nav__separator m-nav__separator--fit"></li>
									    <li class="m-nav__item">
										<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
										    Cancel
										</a>
									    </li>
									</ul>
								    </div>
								</div>
							    </div>
							</div>
						    </li>
						</ul>
					    </div>
					</div>
					<div class="m-portlet__body">
					    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
						<!--Begin::Timeline 2 -->
						<div class="m-timeline-2">
						    <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
							<div class="m-timeline-2__item">
							    <span class="m-timeline-2__item-time">
								10:00
							    </span>
							    <div class="m-timeline-2__item-cricle">
								<i class="fa fa-genderless m--font-danger"></i>
							    </div>
							    <div class="m-timeline-2__item-text  m--padding-top-5">
								Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
								<br>
								    incididunt ut labore et dolore magna
							    </div>
							</div>
							<div class="m-timeline-2__item m--margin-top-30">
							    <span class="m-timeline-2__item-time">
								12:45
							    </span>
							    <div class="m-timeline-2__item-cricle">
								<i class="fa fa-genderless m--font-success"></i>
							    </div>
							    <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
								AEOL Meeting With
							    </div>
							    <div class="m-list-pics m-list-pics--sm m--padding-left-20">
								<a href="#">
								    <img src="assetsXI/app/media/img/users/100_4.jpg" title="">
								</a>
								<a href="#">
								    <img src="assetsXI/app/media/img/users/100_13.jpg" title="">
								</a>
								<a href="#">
								    <img src="assetsXI/app/media/img/users/100_11.jpg" title="">
								</a>
								<a href="#">
								    <img src="assetsXI/app/media/img/users/100_14.jpg" title="">
								</a>
							    </div>
							</div>
							<div class="m-timeline-2__item m--margin-top-30">
							    <span class="m-timeline-2__item-time">
								14:00
							    </span>
							    <div class="m-timeline-2__item-cricle">
								<i class="fa fa-genderless m--font-brand"></i>
							    </div>
							    <div class="m-timeline-2__item-text m--padding-top-5">
								Make Deposit
								<a href="#" class="m-link m-link--brand m--font-bolder">
								    USD 700
								</a>
								To ESL.
							    </div>
							</div>
							<div class="m-timeline-2__item m--margin-top-30">
							    <span class="m-timeline-2__item-time">
								16:00
							    </span>
							    <div class="m-timeline-2__item-cricle">
								<i class="fa fa-genderless m--font-warning"></i>
							    </div>
							    <div class="m-timeline-2__item-text m--padding-top-5">
								Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
								<br>
								    incididunt ut labore et dolore magna elit enim at minim
								    <br>
									veniam quis nostrud
									</div>
									</div>
									<div class="m-timeline-2__item m--margin-top-30">
									    <span class="m-timeline-2__item-time">
										17:00
									    </span>
									    <div class="m-timeline-2__item-cricle">
										<i class="fa fa-genderless m--font-info"></i>
									    </div>
									    <div class="m-timeline-2__item-text m--padding-top-5">
										Placed a new order in
										<a href="#" class="m-link m-link--brand m--font-bolder">
										    SIGNATURE MOBILE
										</a>
										marketplace.
									    </div>
									</div>
									<div class="m-timeline-2__item m--margin-top-30">
									    <span class="m-timeline-2__item-time">
										16:00
									    </span>
									    <div class="m-timeline-2__item-cricle">
										<i class="fa fa-genderless m--font-brand"></i>
									    </div>
									    <div class="m-timeline-2__item-text m--padding-top-5">
										Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
										<br>
										    incididunt ut labore et dolore magna elit enim at minim
										    <br>
											veniam quis nostrud
											</div>
											</div>
											<div class="m-timeline-2__item m--margin-top-30">
											    <span class="m-timeline-2__item-time">
												17:00
											    </span>
											    <div class="m-timeline-2__item-cricle">
												<i class="fa fa-genderless m--font-danger"></i>
											    </div>
											    <div class="m-timeline-2__item-text m--padding-top-5">
												Received a new feedback on
												<a href="#" class="m-link m-link--brand m--font-bolder">
												    FinancePro App
												</a>
												product.
											    </div>
											</div>
											</div>
											</div>
											<!--End::Timeline 2 -->
											</div>
											</div>
											</div>
											<!--End::Portlet-->
											</div>
											<div class="col-xl-6 col-lg-12">
											    <!--Begin::Portlet-->
											    <div class="m-portlet m-portlet--full-height ">
												<div class="m-portlet__head">
												    <div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
													    <h3 class="m-portlet__head-text">
														Recent Notifications
													    </h3>
													</div>
												    </div>
												    <div class="m-portlet__head-tools">
													<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
													    <li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
														    Today
														</a>
													    </li>
													    <li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
														    Month
														</a>
													    </li>
													</ul>
												    </div>
												</div>
												<div class="m-portlet__body">
												    <div class="tab-content">
													<div class="tab-pane active" id="m_widget2_tab1_content">
													    <!--Begin::Timeline 3 -->
													    <div class="m-timeline-3">
														<div class="m-timeline-3__items">
														    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
															    09:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Bob
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time">
															    10:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit amit
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Sean
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
															    11:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit amit eiusmdd tempor
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By James
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time">
															    12:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By James
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time">
															    14:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit amit,consectetur eiusmdd
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Derrick
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
															    15:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit amit,consectetur
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Iman
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
															    17:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem ipsum dolor sit consectetur eiusmdd tempor
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Aziko
																    </a>
																</span>
															</div>
														    </div>
														</div>
													    </div>
													    <!--End::Timeline 3 -->
													</div>
													<div class="tab-pane" id="m_widget2_tab2_content">
													    <!--Begin::Timeline 3 -->
													    <div class="m-timeline-3">
														<div class="m-timeline-3__items">
														    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-focus">
															    09:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Contrary to popular belief, Lorem Ipsum is not simply random text.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Bob
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time m--font-warning">
															    10:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																There are many variations of passages of Lorem Ipsum available.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Sean
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-primary">
															    11:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Contrary to popular belief, Lorem Ipsum is not simply random text.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By James
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time m--font-success">
															    12:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By James
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time m--font-warning">
															    14:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Latin words, combined with a handful of model sentence structures.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Derrick
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-info">
															    15:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Contrary to popular belief, Lorem Ipsum is not simply random text.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Iman
																    </a>
																</span>
															</div>
														    </div>
														    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-danger">
															    17:00
															</span>
															<div class="m-timeline-3__item-desc">
															    <span class="m-timeline-3__item-text">
																Lorem Ipsum is therefore always free from repetition, injected humour.
															    </span>
															    <br>
																<span class="m-timeline-3__item-user-name">
																    <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																	By Aziko
																    </a>
																</span>
															</div>
														    </div>
														</div>
													    </div>
													    <!--End::Timeline 3 -->
													</div>
												    </div>
												</div>
											    </div>
											    <!--End::Portlet-->
											</div>
											</div>
											<!--End::Section-->
											<!--Begin::Section-->
											<div class="row">
											    <div class="col-xl-8">
												<div class="m-portlet m-portlet--mobile ">
												    <div class="m-portlet__head">
													<div class="m-portlet__head-caption">
													    <div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
														    Exclusive Datatable Plugin
														</h3>
													    </div>
													</div>
													<div class="m-portlet__head-tools">
													    <ul class="m-portlet__nav">
														<li class="m-portlet__nav-item">
														    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
															<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
															    <i class="la la-ellipsis-h m--font-brand"></i>
															</a>
															<div class="m-dropdown__wrapper">
															    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
															    <div class="m-dropdown__inner">
																<div class="m-dropdown__body">
																    <div class="m-dropdown__content">
																	<ul class="m-nav">
																	    <li class="m-nav__section m-nav__section--first">
																		<span class="m-nav__section-text">
																		    Quick Actions
																		</span>
																	    </li>
																	    <li class="m-nav__item">
																		<a href="" class="m-nav__link">
																		    <i class="m-nav__link-icon flaticon-share"></i>
																		    <span class="m-nav__link-text">
																			Create Post
																		    </span>
																		</a>
																	    </li>
																	    <li class="m-nav__item">
																		<a href="" class="m-nav__link">
																		    <i class="m-nav__link-icon flaticon-chat-1"></i>
																		    <span class="m-nav__link-text">
																			Send Messages
																		    </span>
																		</a>
																	    </li>
																	    <li class="m-nav__item">
																		<a href="" class="m-nav__link">
																		    <i class="m-nav__link-icon flaticon-multimedia-2"></i>
																		    <span class="m-nav__link-text">
																			Upload File
																		    </span>
																		</a>
																	    </li>
																	    <li class="m-nav__section">
																		<span class="m-nav__section-text">
																		    Useful Links
																		</span>
																	    </li>
																	    <li class="m-nav__item">
																		<a href="" class="m-nav__link">
																		    <i class="m-nav__link-icon flaticon-info"></i>
																		    <span class="m-nav__link-text">
																			FAQ
																		    </span>
																		</a>
																	    </li>
																	    <li class="m-nav__item">
																		<a href="" class="m-nav__link">
																		    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		    <span class="m-nav__link-text">
																			Support
																		    </span>
																		</a>
																	    </li>
																	    <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
																	    <li class="m-nav__item m--hide">
																		<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																		    Submit
																		</a>
																	    </li>
																	</ul>
																    </div>
																</div>
															    </div>
															</div>
														    </div>
														</li>
													    </ul>
													</div>
												    </div>
												    <div class="m-portlet__body">
													<!--begin: Datatable -->
													<div class="m_datatable" id="m_datatable_latest_orders"></div>
													<!--end: Datatable -->
												    </div>
												</div>
											    </div>
											    <div class="col-xl-4">
												<!--begin:: Widgets/Audit Log-->
												<div class="m-portlet m-portlet--full-height ">
												    <div class="m-portlet__head">
													<div class="m-portlet__head-caption">
													    <div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
														    Audit Log
														</h3>
													    </div>
													</div>
													<div class="m-portlet__head-tools">
													    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
														<li class="nav-item m-tabs__item">
														    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
															Today
														    </a>
														</li>
														<li class="nav-item m-tabs__item">
														    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
															Week
														    </a>
														</li>
														<li class="nav-item m-tabs__item">
														    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
															Month
														    </a>
														</li>
													    </ul>
													</div>
												    </div>
												    <div class="m-portlet__body">
													<div class="tab-content">
													    <div class="tab-pane active" id="m_widget4_tab1_content">
														<div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
														    <div class="m-list-timeline m-list-timeline--skin-light">
															<div class="m-list-timeline__items">
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span class="m-list-timeline__text">
																    12 new users registered
																</span>
																<span class="m-list-timeline__time">
																    Just now
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">
																    System shutdown
																    <span class="m-badge m-badge--success m-badge--wide">
																	pending
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    14 mins
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">
																    New invoice received
																</span>
																<span class="m-list-timeline__time">
																    20 mins
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">
																    DB overloaded 80%
																    <span class="m-badge m-badge--info m-badge--wide">
																	settled
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    1 hr
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																<span class="m-list-timeline__text">
																    System error -
																    <a href="#" class="m-link">
																	Check
																    </a>
																</span>
																<span class="m-list-timeline__time">
																    2 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																<span class="m-list-timeline__text">
																    Production server down
																</span>
																<span class="m-list-timeline__time">
																    3 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">
																    Production server up
																</span>
																<span class="m-list-timeline__time">
																    5 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span href="" class="m-list-timeline__text">
																    New order received
																    <span class="m-badge m-badge--danger m-badge--wide">
																	urgent
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    7 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span class="m-list-timeline__text">
																    12 new users registered
																</span>
																<span class="m-list-timeline__time">
																    Just now
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">
																    System shutdown
																    <span class="m-badge m-badge--success m-badge--wide">
																	pending
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    14 mins
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">
																    New invoice received
																</span>
																<span class="m-list-timeline__time">
																    20 mins
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">
																    DB overloaded 80%
																    <span class="m-badge m-badge--info m-badge--wide">
																	settled
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    1 hr
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">
																    New invoice received
																</span>
																<span class="m-list-timeline__time">
																    20 mins
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">
																    DB overloaded 80%
																    <span class="m-badge m-badge--info m-badge--wide">
																	settled
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    1 hr
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																<span class="m-list-timeline__text">
																    System error -
																    <a href="#" class="m-link">
																	Check
																    </a>
																</span>
																<span class="m-list-timeline__time">
																    2 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																<span class="m-list-timeline__text">
																    Production server down
																</span>
																<span class="m-list-timeline__time">
																    3 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">
																    Production server up
																</span>
																<span class="m-list-timeline__time">
																    5 hrs
																</span>
															    </div>
															    <div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span href="" class="m-list-timeline__text">
																    New order received
																    <span class="m-badge m-badge--danger m-badge--wide">
																	urgent
																    </span>
																</span>
																<span class="m-list-timeline__time">
																    7 hrs
																</span>
															    </div>
															</div>
														    </div>
														</div>
													    </div>
													    <div class="tab-pane" id="m_widget4_tab2_content"></div>
													    <div class="tab-pane" id="m_widget4_tab3_content"></div>
													</div>
												    </div>
												</div>
												<!--end:: Widgets/Audit Log-->
											    </div>
											</div>
											<!--End::Section-->
											</div>
											</div>
											</div>
											</div>
											<!-- end:: Body -->
											<!-- begin::Footer -->
											<footer class="m-grid__item  m-footer ">
											    <div class="m-container m-container--responsive m-container--xxl m-container--full-height">
												<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
												    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
													<span class="m-footer__copyright">
													    2017 &copy; Metronic theme by
													    <a href="https://keenthemes.com" class="m-link">
														Keenthemes
													    </a>
													</span>
												    </div>
												    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
													<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
													    <li class="m-nav__item">
														<a href="#" class="m-nav__link">
														    <span class="m-nav__link-text">
															About
														    </span>
														</a>
													    </li>
													    <li class="m-nav__item">
														<a href="#"  class="m-nav__link">
														    <span class="m-nav__link-text">
															Privacy
														    </span>
														</a>
													    </li>
													    <li class="m-nav__item">
														<a href="#" class="m-nav__link">
														    <span class="m-nav__link-text">
															T&C
														    </span>
														</a>
													    </li>
													    <li class="m-nav__item">
														<a href="#" class="m-nav__link">
														    <span class="m-nav__link-text">
															Purchase
														    </span>
														</a>
													    </li>
													    <li class="m-nav__item m-nav__item--last">
														<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
														    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
														</a>
													    </li>
													</ul>
												    </div>
												</div>
											    </div>
											</footer>
											<!-- end::Footer -->
											</div>
											<!-- end:: Page -->
											<!-- begin::Quick Sidebar -->
											<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
											    <div class="m-quick-sidebar__content m--hide">
												<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
												    <i class="la la-close"></i>
												</span>
												<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
												    <li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
													    Messages
													</a>
												    </li>
												    <li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
													    Settings
													</a>
												    </li>
												    <li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
													    Logs
													</a>
												    </li>
												</ul>
												<div class="tab-content">
												    <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
													<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
													    <div class="m-messenger__messages">
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--in">
															<div class="m-messenger__message-pic">
															    <img src="assetsXI/app/media/img//users/user3.jpg" alt=""/>
															</div>
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-username">
																    Megan wrote
																</div>
																<div class="m-messenger__message-text">
																    Hi Bob. What time will be the meeting ?
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--out">
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-text">
																    Hi Megan. It's at 2.30PM
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--in">
															<div class="m-messenger__message-pic">
															    <img src="assetsXI/app/media/img//users/user3.jpg" alt=""/>
															</div>
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-username">
																    Megan wrote
																</div>
																<div class="m-messenger__message-text">
																    Will the development team be joining ?
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--out">
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-text">
																    Yes sure. I invited them as well
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__datetime">
														    2:30PM
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--in">
															<div class="m-messenger__message-pic">
															    <img src="assetsXI/app/media/img//users/user3.jpg"  alt=""/>
															</div>
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-username">
																    Megan wrote
																</div>
																<div class="m-messenger__message-text">
																    Noted. For the Coca-Cola Mobile App project as well ?
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--out">
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-text">
																    Yes, sure.
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--out">
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-text">
																    Please also prepare the quotation for the Loop CRM project as well.
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__datetime">
														    3:15PM
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--in">
															<div class="m-messenger__message-no-pic m--bg-fill-danger">
															    <span>
																M
															    </span>
															</div>
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-username">
																    Megan wrote
																</div>
																<div class="m-messenger__message-text">
																    Noted. I will prepare it.
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--out">
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-text">
																    Thanks Megan. I will see you later.
																</div>
															    </div>
															</div>
														    </div>
														</div>
														<div class="m-messenger__wrapper">
														    <div class="m-messenger__message m-messenger__message--in">
															<div class="m-messenger__message-pic">
															    <img src="assetsXI/app/media/img//users/user3.jpg"  alt=""/>
															</div>
															<div class="m-messenger__message-body">
															    <div class="m-messenger__message-arrow"></div>
															    <div class="m-messenger__message-content">
																<div class="m-messenger__message-username">
																    Megan wrote
																</div>
																<div class="m-messenger__message-text">
																    Sure. See you in the meeting soon.
																</div>
															    </div>
															</div>
														    </div>
														</div>
													    </div>
													    <div class="m-messenger__seperator"></div>
													    <div class="m-messenger__form">
														<div class="m-messenger__form-controls">
														    <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
														</div>
														<div class="m-messenger__form-tools">
														    <a href="" class="m-messenger__form-attachment">
															<i class="la la-paperclip"></i>
														    </a>
														</div>
													    </div>
													</div>
												    </div>
												    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
													<div class="m-list-settings">
													    <div class="m-list-settings__group">
														<div class="m-list-settings__heading">
														    General Settings
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Email Notifications
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" checked="checked" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Site Tracking
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															SMS Alerts
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Backup Storage
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Audit Logs
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" checked="checked" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
													    </div>
													    <div class="m-list-settings__group">
														<div class="m-list-settings__heading">
														    System Settings
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															System Logs
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Error Reporting
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Applications Logs
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Backup Servers
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" checked="checked" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
														<div class="m-list-settings__item">
														    <span class="m-list-settings__item-label">
															Audit Logs
														    </span>
														    <span class="m-list-settings__item-control">
															<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
															    <label>
																<input type="checkbox" name="">
																    <span></span>
															    </label>
															</span>
														    </span>
														</div>
													    </div>
													</div>
												    </div>
												    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
													<div class="m-list-timeline">
													    <div class="m-list-timeline__group">
														<div class="m-list-timeline__heading">
														    System Logs
														</div>
														<div class="m-list-timeline__items">
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    12 new users registered
															    <span class="m-badge m-badge--warning m-badge--wide">
																important
															    </span>
															</a>
															<span class="m-list-timeline__time">
															    Just now
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    System shutdown
															</a>
															<span class="m-list-timeline__time">
															    11 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
															<a href="" class="m-list-timeline__text">
															    New invoice received
															</a>
															<span class="m-list-timeline__time">
															    20 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
															<a href="" class="m-list-timeline__text">
															    Database overloaded 89%
															    <span class="m-badge m-badge--success m-badge--wide">
																resolved
															    </span>
															</a>
															<span class="m-list-timeline__time">
															    1 hr
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    System error
															</a>
															<span class="m-list-timeline__time">
															    2 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    Production server down
															    <span class="m-badge m-badge--danger m-badge--wide">
																pending
															    </span>
															</a>
															<span class="m-list-timeline__time">
															    3 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    Production server up
															</a>
															<span class="m-list-timeline__time">
															    5 hrs
															</span>
														    </div>
														</div>
													    </div>
													    <div class="m-list-timeline__group">
														<div class="m-list-timeline__heading">
														    Applications Logs
														</div>
														<div class="m-list-timeline__items">
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    New order received
															    <span class="m-badge m-badge--info m-badge--wide">
																urgent
															    </span>
															</a>
															<span class="m-list-timeline__time">
															    7 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    12 new users registered
															</a>
															<span class="m-list-timeline__time">
															    Just now
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    System shutdown
															</a>
															<span class="m-list-timeline__time">
															    11 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
															<a href="" class="m-list-timeline__text">
															    New invoices received
															</a>
															<span class="m-list-timeline__time">
															    20 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
															<a href="" class="m-list-timeline__text">
															    Database overloaded 89%
															</a>
															<span class="m-list-timeline__time">
															    1 hr
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    System error
															    <span class="m-badge m-badge--info m-badge--wide">
																pending
															    </span>
															</a>
															<span class="m-list-timeline__time">
															    2 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    Production server down
															</a>
															<span class="m-list-timeline__time">
															    3 hrs
															</span>
														    </div>
														</div>
													    </div>
													    <div class="m-list-timeline__group">
														<div class="m-list-timeline__heading">
														    Server Logs
														</div>
														<div class="m-list-timeline__items">
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    Production server up
															</a>
															<span class="m-list-timeline__time">
															    5 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    New order received
															</a>
															<span class="m-list-timeline__time">
															    7 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    12 new users registered
															</a>
															<span class="m-list-timeline__time">
															    Just now
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    System shutdown
															</a>
															<span class="m-list-timeline__time">
															    11 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
															<a href="" class="m-list-timeline__text">
															    New invoice received
															</a>
															<span class="m-list-timeline__time">
															    20 mins
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
															<a href="" class="m-list-timeline__text">
															    Database overloaded 89%
															</a>
															<span class="m-list-timeline__time">
															    1 hr
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    System error
															</a>
															<span class="m-list-timeline__time">
															    2 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    Production server down
															</a>
															<span class="m-list-timeline__time">
															    3 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
															<a href="" class="m-list-timeline__text">
															    Production server up
															</a>
															<span class="m-list-timeline__time">
															    5 hrs
															</span>
														    </div>
														    <div class="m-list-timeline__item">
															<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
															<a href="" class="m-list-timeline__text">
															    New order received
															</a>
															<span class="m-list-timeline__time">
															    1117 hrs
															</span>
														    </div>
														</div>
													    </div>
													</div>
												    </div>
												</div>
											    </div>
											</div>
											<!-- end::Quick Sidebar -->		    

