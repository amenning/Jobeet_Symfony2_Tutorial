<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1aac7ba7072dbb73e056ebc1f362ca44267cccfd3a1930dd5507438a9c9a13f1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_531eafec2fdee581560b4b12b6a9e2b9dd00cc619b313deaa471aff0e911e028 = $this->env->getExtension("native_profiler");
        $__internal_531eafec2fdee581560b4b12b6a9e2b9dd00cc619b313deaa471aff0e911e028->enter($__internal_531eafec2fdee581560b4b12b6a9e2b9dd00cc619b313deaa471aff0e911e028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531eafec2fdee581560b4b12b6a9e2b9dd00cc619b313deaa471aff0e911e028->leave($__internal_531eafec2fdee581560b4b12b6a9e2b9dd00cc619b313deaa471aff0e911e028_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_74a353194e1b244a82ff2f9c1e2b16df019c0d8f194535446900584b5cea293c = $this->env->getExtension("native_profiler");
        $__internal_74a353194e1b244a82ff2f9c1e2b16df019c0d8f194535446900584b5cea293c->enter($__internal_74a353194e1b244a82ff2f9c1e2b16df019c0d8f194535446900584b5cea293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_74a353194e1b244a82ff2f9c1e2b16df019c0d8f194535446900584b5cea293c->leave($__internal_74a353194e1b244a82ff2f9c1e2b16df019c0d8f194535446900584b5cea293c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ede1333007c63ee6e85784fa2cb9132dfce7b2ca73c06e5d82cbfa47c97a7223 = $this->env->getExtension("native_profiler");
        $__internal_ede1333007c63ee6e85784fa2cb9132dfce7b2ca73c06e5d82cbfa47c97a7223->enter($__internal_ede1333007c63ee6e85784fa2cb9132dfce7b2ca73c06e5d82cbfa47c97a7223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ede1333007c63ee6e85784fa2cb9132dfce7b2ca73c06e5d82cbfa47c97a7223->leave($__internal_ede1333007c63ee6e85784fa2cb9132dfce7b2ca73c06e5d82cbfa47c97a7223_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b7b5ff7f73f949b7975d2fb69088e6f05c83ada6af0737bce6fc96eea8ffec4b = $this->env->getExtension("native_profiler");
        $__internal_b7b5ff7f73f949b7975d2fb69088e6f05c83ada6af0737bce6fc96eea8ffec4b->enter($__internal_b7b5ff7f73f949b7975d2fb69088e6f05c83ada6af0737bce6fc96eea8ffec4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b7b5ff7f73f949b7975d2fb69088e6f05c83ada6af0737bce6fc96eea8ffec4b->leave($__internal_b7b5ff7f73f949b7975d2fb69088e6f05c83ada6af0737bce6fc96eea8ffec4b_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_2e4f723303ab7ce181864b81ca8dc1320c4ced26bdb3e72f7663daf96de6afea = $this->env->getExtension("native_profiler");
        $__internal_2e4f723303ab7ce181864b81ca8dc1320c4ced26bdb3e72f7663daf96de6afea->enter($__internal_2e4f723303ab7ce181864b81ca8dc1320c4ced26bdb3e72f7663daf96de6afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_2e4f723303ab7ce181864b81ca8dc1320c4ced26bdb3e72f7663daf96de6afea->leave($__internal_2e4f723303ab7ce181864b81ca8dc1320c4ced26bdb3e72f7663daf96de6afea_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0afe47ab149b8e285803f9bbe78377be1435ad5fc95f46d44fba3b4375574b6 = $this->env->getExtension("native_profiler");
        $__internal_d0afe47ab149b8e285803f9bbe78377be1435ad5fc95f46d44fba3b4375574b6->enter($__internal_d0afe47ab149b8e285803f9bbe78377be1435ad5fc95f46d44fba3b4375574b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d0afe47ab149b8e285803f9bbe78377be1435ad5fc95f46d44fba3b4375574b6->leave($__internal_d0afe47ab149b8e285803f9bbe78377be1435ad5fc95f46d44fba3b4375574b6_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0109e1ab4054e18e4ec86e8cab41a10b71ca78e7f97a0a7dd068d9c460a239f3 = $this->env->getExtension("native_profiler");
        $__internal_0109e1ab4054e18e4ec86e8cab41a10b71ca78e7f97a0a7dd068d9c460a239f3->enter($__internal_0109e1ab4054e18e4ec86e8cab41a10b71ca78e7f97a0a7dd068d9c460a239f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_0109e1ab4054e18e4ec86e8cab41a10b71ca78e7f97a0a7dd068d9c460a239f3->leave($__internal_0109e1ab4054e18e4ec86e8cab41a10b71ca78e7f97a0a7dd068d9c460a239f3_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_84726a0d30aaa6d0568026be56cac41bd8dafdd4caa1d6b9f40e993473366055 = $this->env->getExtension("native_profiler");
        $__internal_84726a0d30aaa6d0568026be56cac41bd8dafdd4caa1d6b9f40e993473366055->enter($__internal_84726a0d30aaa6d0568026be56cac41bd8dafdd4caa1d6b9f40e993473366055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_84726a0d30aaa6d0568026be56cac41bd8dafdd4caa1d6b9f40e993473366055->leave($__internal_84726a0d30aaa6d0568026be56cac41bd8dafdd4caa1d6b9f40e993473366055_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
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
