<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="com.th.infa.Repositorys"%>
<%@ page import="com.th.infa.Bundles"%>
<%@ page import="com.th.bean.UserInfoBean"%>
<jsp:include page="../../templates/templated-header.jsp" />

<body
	class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		<jsp:include page="../../templates/templated-menu-header.jsp" />
		<!-- END: Header -->
		<!-- begin::Body -->
		<div
			class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark "
				id="m_aside_left_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_aside_left"
				class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
				<!-- BEGIN: Aside Menu -->
				<jsp:include page="../../templates/templated-menu-left.jsp" />
				<script>
					$(document).ready(
							function() {
								activeMenu('menu-main-tpl',
										'menu-main-tpl-university', false);
							});
				</script>
				<!-- END: Aside Menu -->
			</div>
			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<!-- BEGIN: Subheader -->

				<div class="m-subheader ">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title m-subheader__title--separator">
								<%=Bundles.getMessage("menu.master.tpa")%>
							</h3>
							<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
								<li class="m-nav__item m-nav__item--home"><a href="#"
									class="m-nav__link m-nav__link--icon"> <i
										class="m-nav__link-icon la la-user"></i>
								</a></li>
								<li class="m-nav__separator">-</li>

								<li class="m-nav__item"><a href="" class="m-nav__link">
										<span class="m-nav__link-text"> <%=Bundles.getMessage("menu.master.tpa.university")%>
											</span>
										</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<!-- END: Subheader -->


				<!---------------------  START CONTENT  --------------------->
				<div class="m-content">
					<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											<%=Bundles.getMessage("tb.title.fix")%>
											<small>
												<%=Bundles.getMessage("menu.master.tpa.university")%>
											</small>
										</h3>
									</div>
								</div>
					</div>
					<div class="m-portlet__body">
					<!--begin: Search Form -->
					<div
						class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
						<div class="row align-items-center">
							<div class="col-xl-8 order-2 order-xl-1">
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label> <%=Bundles.getMessage("txt.status")%>: </label>
											</div>
											<div class="m-form__control">
												<select class="form-control m-bootstrap-select"
													id="m_form_status">
													<option value=""><%=Bundles.getMessage("txt.all")%></option>
													<option value="A"><%=Bundles.getMessage("txt.active")%></option>
													<option value="C"><%=Bundles.getMessage("txt.cancel")%></option>
												</select>
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
								
									<div class="col-md-4">
										<div class="m-input-icon m-input-icon--left">
											<input type="text" class="form-control m-input"
												placeholder="<%=Bundles.getMessage("txt.search")%>..." id="generalSearch"> <span
												class="m-input-icon__icon m-input-icon__icon--left">
												<span> <i class="la la-search"></i>
											</span>
											</span>
										</div>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
							</div>
							<div class="col-xl-4 order-1 order-xl-2 m--align-right">
								<a href="manage.jsp"
									class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
									<span> <i class="la la-user-plus"></i> <span> <%=Bundles.getMessage("btn.add")%></span>
								</span>
								</a>
								<a href="javascript:cancelAll();"
									class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
									<span> <i class="la la-user-times"></i> <span> <%=Bundles.getMessage("btn.cancel")%></span>
								</span>
								</a>
								<input type="hidden" value="" name="listData" id="listData" />
								<div class="m-separator m-separator--dashed d-xl-none"></div>
							</div>
						</div>
					</div>
					<!--end: Search Form -->
					<!--begin: Datatable -->
					<div class="m_datatable" id="list-datatable"></div>
					<!--end: Datatable -->
					</div>
					</div>
				</div>
				<!---------------------  END CONTENT  --------------------->


			</div>
		</div>
		<!-- end:: Body -->
		<!-- begin::Footer -->
		<jsp:include page="../../templates/templated-footer.jsp" />
		<!-- end::Footer -->
	</div>
	<!-- end:: Page -->

	<!-- begin::Quick Nav -->
	<jsp:include page="../../templates/templated-quicknav.jsp" />
	<!-- begin::Quick Nav -->

	<!-- begin::Quick Nav -->
	<jsp:include page="../../templates/templated-script-common.jsp" />
	<!-- begin::Quick Nav -->

	<!--begin::Page Snippets -->
	    <script src="../../js/university/index.js" type="text/javascript"></script>
	<!--end::Page Snippets -->
</body>



