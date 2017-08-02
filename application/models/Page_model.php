<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {
	public function __construct()
    {
        parent::__construct();
    }
	public function get_menu()
	{
            $query = $this->db->get('menu');
            return $query->result_array();
	}
        public function add_item_menu($data)
        {
            $this->db->insert('menu',$data);
        }
        public function delete_item_menu($data)
        {
            $this->db->delete('menu',$data);
        }
        public function get_item_menu($data)
        {
            $this->db->where('id',$data['id']);
            $query = $this->db->get('menu');
            return $query->result_array();
        }
        public function update_item_menu($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('menu',$data);
        }
        public function get_phone()
        {
            $query = $this->db->get('phone');
            return $query->result_array();
        }
        public function update_phone($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('phone',$data);
        }
        public function get_chooses()
        {
            $query = $this->db->get('chooses');
            return $query->result_array();
        }
        public function add_choose($data)
        {
            $this->db->insert('chooses',$data);
        }
        public function get_item_choose($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('chooses');
            return $query->result_array();
        }
        public function update_choose($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('chooses',$data);
        }
        public function delete_item_choose($data)
        {
            $this->db->delete('chooses',$data);
        }
        public function get_pine_stairs()
        {
            $query = $this->db->get('pine_stairs');
            return $query->result_array();
        }
        public function get_larch_stairs()
        {
            $query = $this->db->get('larch_stairs');
            return $query->result_array();
        }
        public function get_ash_tree_stairs()
        {
            $query = $this->db->get('ash_tree_stairs');
            return $query->result_array();
        }
        public function get_oak_stairs()
        {
            $query = $this->db->get('oak_stairs');
            return $query->result_array();
        }
        public function get_accessories()
        {
            $query = $this->db->get('accessories');
            return $query->result_array();
        }
        public function add_pine_stair($data)
        {
            $this->db->insert('pine_stairs',$data);
        }
        public function delete_pine_stair($data)
        {
            $this->db->delete('pine_stairs',$data);
        }
        public function get_pine_stair($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('pine_stairs');
            return $query->result_array();
        }
        public function update_pine_stair($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('pine_stairs',$data);
        }
        public function add_larch_stair($data)
        {
            $this->db->insert('larch_stairs',$data);
        }
        public function delete_larch_stair($data)
        {
            $this->db->delete('larch_stairs',$data);
        }
        public function get_larch_stair($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('larch_stairs');
            return $query->result_array();
        }
        public function update_larch_stair($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('larch_stairs',$data);
        }
        public function add_ash_tree_stair($data)
        {
            $this->db->insert('ash_tree_stairs',$data);
        }
        public function delete_ash_tree_stair($data)
        {
            $this->db->delete('ash_tree_stairs',$data);
        }
        public function get_ash_tree_stair($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('ash_tree_stairs');
            return $query->result_array();
        }
        public function update_ash_tree_stair($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('ash_tree_stairs',$data);
        }
        public function add_oak_stair($data)
        {
            $this->db->insert('oak_stairs',$data);
        }
        public function get_oak_stair($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('oak_stairs');
            return $query->result_array();
        }
        public function delete_oak_stair($data)
        {
            $this->db->delete('oak_stairs',$data);
        }
        public function update_oak_stair($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('oak_stairs',$data);
        }
        public function add_accessory($data)
        {
            $this->db->insert('accessories',$data);
        }
        public function get_accessory($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('accessories');
            return $query->result_array();
        }
        public function delete_accessory($data)
        {
            $this->db->delete('accessories',$data);
        }
        public function update_accessory($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('accessories',$data);
        }
        public function get_feedback()
        {
            $query = $this->db->get('feedback');
            return $query->result_array();
        }
        public function update_feedback($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('feedback',$data);
        }
        public function get_how_work()
        {
            $query = $this->db->get('how_work');
            return $query->result_array();
        }
        public function add_how_work($data)
        {
            $this->db->insert('how_work',$data);
        }
        public function delete_how_work($data)
        {
            $this->db->delete('how_work',$data);
        }
        public function get_item_how_work($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('how_work');
            return $query->result_array();
        }
        public function update_how_work($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('how_work',$data);
        }
        public function get_recommendations()
        {
            $query = $this->db->get('recommendations');
            return $query->result_array();
        }
        public function add_recommendations($data)
        {
            $this->db->insert('recommendations',$data);
        }
        public function delete_recommendations($data)
        {
            $this->db->delete('recommendations',$data);
        }
        public function get_item_recommendations($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('recommendations');
            return $query->result_array();
        }
        public function update_recommendations($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('recommendations',$data);
        }
        public function get_reviews()
        {
            $query = $this->db->get('reviews');
            return $query->result_array();
        }
        public function add_reviews($data)
        {
            $this->db->insert('reviews',$data);
        }
        public function delete_reviews($data)
        {
            $this->db->delete('reviews',$data);
        }
         public function get_item_reviews($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('reviews');
            return $query->result_array();
        }
        public function update_reviews($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('reviews',$data);
        }
        public function get_footer()
	{
            $query = $this->db->get('footer');
            return $query->result_array();
	}
        public function update_footer($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('footer',$data);
        }
        public function get_top_text()
	{
            $query = $this->db->get('top_text');
            return $query->result_array();
	}
        public function update_top_text($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('top_text',$data);
        }
        public function get_password()
        {
            $query = $this->db->get('password');
            return $query->result_array();
        }
        public function update_password($pass)
        {
            $this->db->update('password',$pass);
        }
        public function get_social()
        {
            $query = $this->db->get('social');
            return $query->result_array();
        }
        public function get_one_social($id)
        {
            $this->db->where('id',$id);
            $query = $this->db->get('social');
            return $query->result_array();
        }
        public function update_social($id,$data)
        {
            $this->db->where('id',$id);
            $this->db->update('social',$data);
        }  
}

