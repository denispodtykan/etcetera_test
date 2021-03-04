<?php
/**
 * Template part for displaying premises list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>


<div class="row">
    <div class="col-md-3 mb-4">
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
            <input type="hidden" name="action" value="premises_filter">
            <input type="hidden" name="parent_id" value="<?php the_ID(); ?>">
            <input type="hidden" name="page" value="1">
            <div class="form-group">
                <label for="floor_min">Area min</label>
                <input type="number" class="form-control"name="area_min" id="area_min" placeholder="Min"  min="1" oninput="validity.valid||(value='');"/>
            </div>
            <div class="form-group">
                <label for="floor_min">Area max</label>
                <input type="number" class="form-control" name="area_max" id="area_max" placeholder="Max" min="1" oninput="validity.valid||(value='');"/>
            </div>

            <div class="form-group">
                <label for="floor_min">Rooms count from</label>
                <input type="number" class="form-control"name="rooms_from" id="rooms_from" placeholder="From"  min="1" oninput="validity.valid||(value='');"/>
            </div>
            <div class="form-group">
                <label for="floor_min">Rooms count to</label>
                <input type="number" class="form-control" name="rooms_to" id="rooms_to" placeholder="To" min="1" oninput="validity.valid||(value='');"/>
            </div>
        
            <div class="form-group">
                <label  for="bathroom">Bathroom</label>
                <select class="custom-select" name="bathroom" id="bathroom">
                    <option value="all">All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label  for="bathroom">Balcony</label>
                <select class="custom-select" name="balcony" id="balcony">
                    <option value="all">All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
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


