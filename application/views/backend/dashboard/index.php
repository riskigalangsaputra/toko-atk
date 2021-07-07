<div class="col col-md-12">
    <div class="card flat-card">
        <div class="row-table">
            <div class="col-sm-6 card-body br">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fas fa-users text-primary mb-1"></i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                        <h5><?=count($users)?></h5>
                        <span>Customers</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fas fa-users text-primary mb-1"></i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                        <h5><?=count($products)?></h5>
                        <span>Products</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="material-icons-two-tone text-primary mb-1">unarchive</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                        <h5><?=count($transactions)?></h5>
                        <span>Transaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Line chart Transaction</h5>
            </div>
            <div class="card-body">
                <div id="line-chart-1"></div>
            </div>
        </div>
    </div>
</div>