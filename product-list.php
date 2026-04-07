<?php include('header.php'); ?>

<section class="archive-section pt-0">
  <div class="container-fluid px-4 px-md-5">
    <div class="archive-toolbar">
      <div>
        <h1>All Products <span class="archive-result" id="resultCount">
            (8)
          </span></h1>

      </div>
      <div class="archive-sort">
        <label for="sortBy">Sort</label>
        <select id="sortBy">
          <option value="featured">Featured</option>
          <option value="priceLow">Price: Low to High</option>
          <option value="priceHigh">Price: High to Low</option>
          <option value="name">Name: A-Z</option>
        </select>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-3">
        <aside class="archive-filters">
          <div class="filter-block">
            <h6>Category</h6>
            <label><input type="checkbox" class="filter" data-filter="category" value="system" /> Complete Systems</label>
            <label><input type="checkbox" class="filter" data-filter="category" value="mattress" /> Mattresses</label>
            <label><input type="checkbox" class="filter" data-filter="category" value="bedding" /> Bedding</label>
            <label><input type="checkbox" class="filter" data-filter="category" value="accessory" /> Accessories</label>
          </div>

          <div class="filter-block">
            <h6>Comfort</h6>
            <label><input type="checkbox" class="filter" data-filter="comfort" value="plush" /> Plush</label>
            <label><input type="checkbox" class="filter" data-filter="comfort" value="balanced" /> Balanced</label>
            <label><input type="checkbox" class="filter" data-filter="comfort" value="firm" /> Firm</label>
            <label><input type="checkbox" class="filter" data-filter="comfort" value="cooling" /> Cooling</label>
          </div>

          <div class="filter-block">
            <h6>Size</h6>
            <label><input type="checkbox" class="filter" data-filter="size" value="twin" /> Twin</label>
            <label><input type="checkbox" class="filter" data-filter="size" value="queen" /> Queen</label>
            <label><input type="checkbox" class="filter" data-filter="size" value="king" /> King</label>
            <label><input type="checkbox" class="filter" data-filter="size" value="cal-king" /> Cal King</label>
          </div>

          <div class="filter-block">
            <h6>Price</h6>
            <label><input type="checkbox" class="filter" data-filter="price" value="0-1000" /> Under $1,000</label>
            <label><input type="checkbox" class="filter" data-filter="price" value="1000-2000" /> $1,000-$2,000</label>
            <label><input type="checkbox" class="filter" data-filter="price" value="2000-5000" /> $2,000-$5,000</label>
          </div>

          <button id="clearFilters" class="btn btn-outline-dark w-100 mt-3">
            Clear Filters
          </button>
        </aside>
      </div>

      <div class="col-lg-9">
        <div class="row g-4" id="productGrid">
          <div class="col-md-6 col-xl-4 product-item" data-name="cozify complete system" data-price="2399" data-category="system" data-comfort="plush balanced" data-size="queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/i2.jpg" alt="Cozify Complete System" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Complete System</p>
                <h5>Cozify</h5>
                <p>Cloud-soft layers with warm pressure relief.</p>
                <div class="archive-card-bottom">
                  <span>$2,399</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="felicity hybrid mattress" data-price="1899" data-category="mattress" data-comfort="balanced" data-size="twin queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/i3.jpg" alt="Felicity Hybrid Mattress" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Mattress</p>
                <h5>Felicity Hybrid</h5>
                <p>Balanced support designed for mixed sleepers.</p>
                <div class="archive-card-bottom">
                  <span>$1,899</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="sci-temp cooling mattress" data-price="2699" data-category="mattress" data-comfort="firm cooling" data-size="queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/i6.jpg" alt="Sci-Temp Cooling Mattress" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Mattress</p>
                <h5>Sci-Temp Cooling</h5>
                <p>Temperature-adaptive comfort with structured support.</p>
                <div class="archive-card-bottom">
                  <span>$2,699</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="rest linen sheet set" data-price="299" data-category="bedding" data-comfort="plush cooling" data-size="queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/s1.jpg" alt="Rest Linen Sheet Set" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Bedding</p>
                <h5>Rest Linen Sheet Set</h5>
                <p>Breathable linen weave for cooler nights.</p>
                <div class="archive-card-bottom">
                  <span>$299</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="somn support pillow" data-price="189" data-category="accessory" data-comfort="plush firm" data-size="queen king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/s2.jpg" alt="SOMN Support Pillow" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Accessory</p>
                <h5>Support Pillow</h5>
                <p>Dual-core pillow with adjustable loft.</p>
                <div class="archive-card-bottom">
                  <span>$189</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="deep rest duvet" data-price="459" data-category="bedding" data-comfort="plush" data-size="queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/s3.jpg" alt="Deep Rest Duvet" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Bedding</p>
                <h5>Deep Rest Duvet</h5>
                <p>Lightweight warmth with soft down-alternative fill.</p>
                <div class="archive-card-bottom">
                  <span>$459</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="felicity complete sleep system" data-price="3199" data-category="system" data-comfort="balanced firm" data-size="queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/i4.jpg" alt="Felicity Complete Sleep System" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Complete System</p>
                <h5>Felicity Complete</h5>
                <p>Fully paired mattress and bedding setup.</p>
                <div class="archive-card-bottom">
                  <span>$3,199</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4 product-item" data-name="night shield mattress protector" data-price="149" data-category="accessory" data-comfort="cooling" data-size="twin queen king cal-king">
            <article class="archive-card">
              <img src="<?php echo $base_url; ?>img/p4.png" alt="Night Shield Mattress Protector" />
              <div class="archive-card-body">
                <p class="archive-card-kicker">Accessory</p>
                <h5>Night Shield Protector</h5>
                <p>Quiet waterproof layer with cooling surface yarns.</p>
                <div class="archive-card-bottom">
                  <span>$149</span>
                  <a href="product.html" class="abtsm2">Shop</a>
                </div>
              </div>
            </article>
          </div>
        </div>

        <p id="noResults" class="archive-empty d-none">
          No products match these filters.
        </p>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>

<script>
  document.getElementById("menuToggle").onclick = function() {
    document.getElementById("megaMenu").classList.add("open");
  };
  document.getElementById("menuClose").onclick = function() {
    document.getElementById("megaMenu").classList.remove("open");
  };

  const filters = document.querySelectorAll(".filter");
  const products = Array.from(document.querySelectorAll(".product-item"));
  const resultCount = document.getElementById("resultCount");
  const noResults = document.getElementById("noResults");
  const sortBy = document.getElementById("sortBy");
  const clearFilters = document.getElementById("clearFilters");
  const productGrid = document.getElementById("productGrid");
  const defaultOrder = new Map(
    products.map((product, index) => [product, index])
  );

  function selectedValues(key) {
    return Array.from(
      document.querySelectorAll(`.filter[data-filter="${key}"]:checked`)
    ).map((input) => input.value);
  }

  function matchesPriceRange(price, ranges) {
    if (!ranges.length) return true;
    return ranges.some((range) => {
      const [min, max] = range.split("-").map(Number);
      return price >= min && price <= max;
    });
  }

  function matchesMultiValue(datasetValue, selected) {
    if (!selected.length) return true;
    const current = datasetValue.split(" ");
    return selected.some((value) => current.includes(value));
  }

  function applyFilters() {
    const active = {
      category: selectedValues("category"),
      comfort: selectedValues("comfort"),
      size: selectedValues("size"),
      price: selectedValues("price"),
    };

    let visibleCount = 0;
    products.forEach((product) => {
      const price = Number(product.dataset.price);
      const show =
        matchesMultiValue(product.dataset.category, active.category) &&
        matchesMultiValue(product.dataset.comfort, active.comfort) &&
        matchesMultiValue(product.dataset.size, active.size) &&
        matchesPriceRange(price, active.price);

      product.classList.toggle("d-none", !show);
      if (show) visibleCount++;
    });

    resultCount.textContent = `(${visibleCount})`;
    noResults.classList.toggle("d-none", visibleCount !== 0);
  }

  function sortProducts() {
    const sorted = [...products].sort((a, b) => {
      if (sortBy.value === "featured")
        return defaultOrder.get(a) - defaultOrder.get(b);
      if (sortBy.value === "priceLow")
        return Number(a.dataset.price) - Number(b.dataset.price);
      if (sortBy.value === "priceHigh")
        return Number(b.dataset.price) - Number(a.dataset.price);
      if (sortBy.value === "name")
        return a.dataset.name.localeCompare(b.dataset.name);
      return 0;
    });
    sorted.forEach((item) => productGrid.appendChild(item));
  }

  filters.forEach((filter) => {
    filter.addEventListener("change", applyFilters);
  });

  sortBy.addEventListener("change", () => {
    sortProducts();
    applyFilters();
  });

  clearFilters.addEventListener("click", () => {
    filters.forEach((filter) => (filter.checked = false));
    sortBy.value = "featured";
    sortProducts();
    applyFilters();
  });

  applyFilters();
</script>
