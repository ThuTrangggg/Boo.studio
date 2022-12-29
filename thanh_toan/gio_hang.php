<form enctype="multipart/form-data" data-cart-form onsubmit="return instanceBuy(this)" action="/cart/add" method="post" class="form-inline">
							<div class="price-box clearfix">
								{%if on_var%}
								<span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
									<del class="price product-price-old">
										{% if product.variants[0].compare_at_price > 0 %}{{ product.variants[0].compare_at_price | money }}{% endif %}
									</del>
									<meta itemprop="price" content="{% if product.variants[0].compare_at_price > 0 %}{{ product.variants[0].compare_at_price | money_without_currency  | remove: '.' }}{% else %}0{% endif %}">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</span> <!-- Giá gốca -->
								<span class="special-price">
									<span class="price product-price">{{ product.variants[0].price | money }}</span>
									<meta itemprop="price" content="{{ product.variants[0].price | money_without_currency  | remove: '.' }}">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</span> <!-- Giá Khuyến mại -->

								<span class="save-price">
									<span class="">Sale</span>
								</span> <!-- Tiết kiệm -->

								{%elseif contacts%}
								<div class="special-price">
									<span class="price product-price">Liên hệ </span>
									<meta itemprop="price" content="0">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</div> <!-- Hết hàng -->
								{%elseif product.variants[0].compare_at_price > product.variants[0].price%}
								<span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
									<del class="price product-price-old">
										{{ product.variants[0].compare_at_price | money }}
									</del>
									<meta itemprop="price" content="{% if product.variants[0].compare_at_price > 0 %}{{ product.variants[0].compare_at_price | money_without_currency  | remove: '.' }}{% else %}0{% endif %}">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</span> <!-- Giás gốc -->
								<span class="special-price">
									<span class="price product-price">{{ product.variants[0].price | money }}</span>
									<meta itemprop="price" content="{{ product.variants[0].price | money_without_currency  | remove: '.' }}">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</span> <!-- Giá Khuyến mại -->
								<span class="save-price">
									<span class="">Sale</span>
								</span> <!-- Tiết kiệm -->

								{% else %}
								<div class="special-price">
									<span class="price product-price">{{ product.variants[0].price | money }}</span>
									<meta itemprop="price" content="{{ product.variants[0].price | money_without_currency  | remove: '.' }}">
									<meta itemprop="priceCurrency" content="{{ store.currency }}">
								</div> <!-- Giá -->
								{% endif %}
							</div>
							{% assign variant = product.variants[0] %}
							<div class="product-summary">
								<div class="rte">
									{%if product.summary != null and product.summary != '' and product.summary !=""%}
									{{product.summary}}
									{%else%}
									<em>Mô tả đang cập nhật</em>
									{%endif%}
								</div>
							</div>
							<div class="form-product">
								{% if settings.product_swatch_enable and product.variants.size > 1 %}
								<div class="select-swatch">
									{% for option in product.options %}
									{% include 'swatch' with option %}
									{% endfor %}
								</div>
								{% endif %}
								<div class="box-variant clearfix {% if settings.product_swatch_enable%} d-none {%endif%}">
									{% if variantCount > 1 %} 
									<select id="product-selectors" class="form-control form-control-lg" name="variantId" >
										{% for variant in product.variants %}
										<option {% if variant == product.selected_or_first_available_variant %} selected="selected" {% endif %} value="{{ variant.id }}">{{ variant.title | escape}} - {{ variant.price | money }}</option>
										{% endfor %}
									</select>
									{% else %}
									<input type="hidden" id="one_variant" name="variantId" value="{{ product.variants[0].id }}" />
									{% endif %}
								</div>
								<div class="service_product">
									{%- for i in (1..4) -%}
									{%-capture enable_service -%}display_service_{{i}}_product{%-endcapture-%}
									{%-capture image_service -%}image_service_{{i}}_product.png{%-endcapture-%}
									{%-capture textdes -%}text_service_{{i}}_des_product{%-endcapture-%}
									{%-if settings[enable_service]-%}
									<div class="info_servicea">
										<span class="image">
											<img class="img-responsive" src="{{ image_service | asset_url   }}" alt="{{ settings[texttitle] }}">
										</span>
										<p>
											{{ settings[textdes] }}
										</p>
									</div>
									{%-endif-%}
									{%-endfor-%}
								</div>
								<div class="clearfix form-group {%if contacts%}d-none {{contact}}{%endif%}">
									<div class="custom custom-btn-number {% if product.available %}show{%else%}d-none{%endif%}">
										<div class="input_number_product form-control">
											<button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</button>
											<input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
											<button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</button>
										</div>
									</div>
									<div class="flex-quantity">
										<div class="btn-mua button_actions clearfix">
											{% if product.available %}	
											<button type="submit" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
												<span class="txt-main text_1">Mua ngay</span>
											</button>
											{% endif %}
										</div>
									</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-ebook" >
							<a href={{product.summary}}> Bản đọc thử<a/>
							</div>
						</form>
