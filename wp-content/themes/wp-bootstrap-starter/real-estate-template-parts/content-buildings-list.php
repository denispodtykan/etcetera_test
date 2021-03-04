<?php
/**
 * Template part for displaying buildings list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="row">
    <div class="col-md-3 mb-4">
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
            <input type="hidden" name="action" value="building_filter">
            <input type="hidden" name="page" value="1">
            <div class="form-group">
                <label for="floor_min">Floor from</label>
                <input type="number" class="form-control"name="floor_min" id="floor_min" placeholder="From"  min="1" oninput="validity.valid||(value='');"/>
            </div>
            <div class="form-group">
                <label for="floor_min">Floor to</label>
                <input type="number" class="form-control" name="floor_max" id="floor_max" placeholder="To" min="1" oninput="validity.valid||(value='');"/>
            </div>
        
            <div class="form-group">
                <label  for="bulding_type">Bulding type</label>
                <select class="custom-select" name="bulding_type" id="bulding_type">
                    <option value="all">All types</option>
                    <option value="Panel">Panel</option>
                    <option value="Brick">Brick</option>
                    <option value="Foamed concrete blocks">Foamed concrete blocks</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply filter</button>
            <div class="btn btn-link reset">Reset</div>
        </form>
    </div>
    <div class="col-md-9">
        <div class="row" id="response">Loading...</div>
    </div>
</div>


