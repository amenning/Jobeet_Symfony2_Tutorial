<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_322e8bc4875da8e40d7772cc84f2724e758219299ed161f8068a3cc7b496859c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d0176a14b39f0f509c84af218ed823444f541b7d71f3005d6b06728d5515d9 = $this->env->getExtension("native_profiler");
        $__internal_b4d0176a14b39f0f509c84af218ed823444f541b7d71f3005d6b06728d5515d9->enter($__internal_b4d0176a14b39f0f509c84af218ed823444f541b7d71f3005d6b06728d5515d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d0176a14b39f0f509c84af218ed823444f541b7d71f3005d6b06728d5515d9->leave($__internal_b4d0176a14b39f0f509c84af218ed823444f541b7d71f3005d6b06728d5515d9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_169454ef2ef77c52aa257600b62ebb6ca4301af2172c8bea6bca8801373bd4f2 = $this->env->getExtension("native_profiler");
        $__internal_169454ef2ef77c52aa257600b62ebb6ca4301af2172c8bea6bca8801373bd4f2->enter($__internal_169454ef2ef77c52aa257600b62ebb6ca4301af2172c8bea6bca8801373bd4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_169454ef2ef77c52aa257600b62ebb6ca4301af2172c8bea6bca8801373bd4f2->leave($__internal_169454ef2ef77c52aa257600b62ebb6ca4301af2172c8bea6bca8801373bd4f2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9340c23c9a3096e0d65b0e41a9d8062943904d4a59f4865d439bf055a9323132 = $this->env->getExtension("native_profiler");
        $__internal_9340c23c9a3096e0d65b0e41a9d8062943904d4a59f4865d439bf055a9323132->enter($__internal_9340c23c9a3096e0d65b0e41a9d8062943904d4a59f4865d439bf055a9323132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9340c23c9a3096e0d65b0e41a9d8062943904d4a59f4865d439bf055a9323132->leave($__internal_9340c23c9a3096e0d65b0e41a9d8062943904d4a59f4865d439bf055a9323132_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a95e90f2809e5f7a6e5fcde270874b4f5b73fb2dcb0bfe9c46c7ebf0ef286ddb = $this->env->getExtension("native_profiler");
        $__internal_a95e90f2809e5f7a6e5fcde270874b4f5b73fb2dcb0bfe9c46c7ebf0ef286ddb->enter($__internal_a95e90f2809e5f7a6e5fcde270874b4f5b73fb2dcb0bfe9c46c7ebf0ef286ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a95e90f2809e5f7a6e5fcde270874b4f5b73fb2dcb0bfe9c46c7ebf0ef286ddb->leave($__internal_a95e90f2809e5f7a6e5fcde270874b4f5b73fb2dcb0bfe9c46c7ebf0ef286ddb_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a1052a75cb69e7d4c2b7e90994fb4fdcc7ddc70c0c6129c7fc0ce4cafe02da83 = $this->env->getExtension("native_profiler");
        $__internal_a1052a75cb69e7d4c2b7e90994fb4fdcc7ddc70c0c6129c7fc0ce4cafe02da83->enter($__internal_a1052a75cb69e7d4c2b7e90994fb4fdcc7ddc70c0c6129c7fc0ce4cafe02da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_a1052a75cb69e7d4c2b7e90994fb4fdcc7ddc70c0c6129c7fc0ce4cafe02da83->leave($__internal_a1052a75cb69e7d4c2b7e90994fb4fdcc7ddc70c0c6129c7fc0ce4cafe02da83_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a0ccbdf67ede7211982fe8e756001afa4847a34941e89245aa27218ee64f94e = $this->env->getExtension("native_profiler");
        $__internal_7a0ccbdf67ede7211982fe8e756001afa4847a34941e89245aa27218ee64f94e->enter($__internal_7a0ccbdf67ede7211982fe8e756001afa4847a34941e89245aa27218ee64f94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_7a0ccbdf67ede7211982fe8e756001afa4847a34941e89245aa27218ee64f94e->leave($__internal_7a0ccbdf67ede7211982fe8e756001afa4847a34941e89245aa27218ee64f94e_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2c8491c09d7bc9cecdc19c4b6e255c3073919f184554cc1a95ec0c9098df929c = $this->env->getExtension("native_profiler");
        $__internal_2c8491c09d7bc9cecdc19c4b6e255c3073919f184554cc1a95ec0c9098df929c->enter($__internal_2c8491c09d7bc9cecdc19c4b6e255c3073919f184554cc1a95ec0c9098df929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_2c8491c09d7bc9cecdc19c4b6e255c3073919f184554cc1a95ec0c9098df929c->leave($__internal_2c8491c09d7bc9cecdc19c4b6e255c3073919f184554cc1a95ec0c9098df929c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_885ce1834678158e101d94074f0a2d9bb39508254214a73e436aec75c0c0899f = $this->env->getExtension("native_profiler");
        $__internal_885ce1834678158e101d94074f0a2d9bb39508254214a73e436aec75c0c0899f->enter($__internal_885ce1834678158e101d94074f0a2d9bb39508254214a73e436aec75c0c0899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_885ce1834678158e101d94074f0a2d9bb39508254214a73e436aec75c0c0899f->leave($__internal_885ce1834678158e101d94074f0a2d9bb39508254214a73e436aec75c0c0899f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
