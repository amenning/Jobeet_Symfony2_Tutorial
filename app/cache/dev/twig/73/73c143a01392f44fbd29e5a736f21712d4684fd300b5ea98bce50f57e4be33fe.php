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
        $__internal_fbd67567fab3249e5682f790b44e055724269e9768e7165d4ec328a7a3af8313 = $this->env->getExtension("native_profiler");
        $__internal_fbd67567fab3249e5682f790b44e055724269e9768e7165d4ec328a7a3af8313->enter($__internal_fbd67567fab3249e5682f790b44e055724269e9768e7165d4ec328a7a3af8313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd67567fab3249e5682f790b44e055724269e9768e7165d4ec328a7a3af8313->leave($__internal_fbd67567fab3249e5682f790b44e055724269e9768e7165d4ec328a7a3af8313_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_15f19e9464b6997f586b282e1c829b26e800783bfc1bc2ffafea749f409da48e = $this->env->getExtension("native_profiler");
        $__internal_15f19e9464b6997f586b282e1c829b26e800783bfc1bc2ffafea749f409da48e->enter($__internal_15f19e9464b6997f586b282e1c829b26e800783bfc1bc2ffafea749f409da48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_15f19e9464b6997f586b282e1c829b26e800783bfc1bc2ffafea749f409da48e->leave($__internal_15f19e9464b6997f586b282e1c829b26e800783bfc1bc2ffafea749f409da48e_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2656faefe7be1d6457949c0a2cae84c2f9ed418f870d0b89592250688083d802 = $this->env->getExtension("native_profiler");
        $__internal_2656faefe7be1d6457949c0a2cae84c2f9ed418f870d0b89592250688083d802->enter($__internal_2656faefe7be1d6457949c0a2cae84c2f9ed418f870d0b89592250688083d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2656faefe7be1d6457949c0a2cae84c2f9ed418f870d0b89592250688083d802->leave($__internal_2656faefe7be1d6457949c0a2cae84c2f9ed418f870d0b89592250688083d802_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_246ed47e1a34768a924e812e5a813660a3e5c83590483f02bdd48ee5d955b5e6 = $this->env->getExtension("native_profiler");
        $__internal_246ed47e1a34768a924e812e5a813660a3e5c83590483f02bdd48ee5d955b5e6->enter($__internal_246ed47e1a34768a924e812e5a813660a3e5c83590483f02bdd48ee5d955b5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_246ed47e1a34768a924e812e5a813660a3e5c83590483f02bdd48ee5d955b5e6->leave($__internal_246ed47e1a34768a924e812e5a813660a3e5c83590483f02bdd48ee5d955b5e6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5494a88dee66ab9a2ec3a2296ddaa05be2417699072491a12e02ce740253216c = $this->env->getExtension("native_profiler");
        $__internal_5494a88dee66ab9a2ec3a2296ddaa05be2417699072491a12e02ce740253216c->enter($__internal_5494a88dee66ab9a2ec3a2296ddaa05be2417699072491a12e02ce740253216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_5494a88dee66ab9a2ec3a2296ddaa05be2417699072491a12e02ce740253216c->leave($__internal_5494a88dee66ab9a2ec3a2296ddaa05be2417699072491a12e02ce740253216c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d90ff69cbce38cdb51e6c2f96265b44bdb1c974990feb33a8fe410248fde7161 = $this->env->getExtension("native_profiler");
        $__internal_d90ff69cbce38cdb51e6c2f96265b44bdb1c974990feb33a8fe410248fde7161->enter($__internal_d90ff69cbce38cdb51e6c2f96265b44bdb1c974990feb33a8fe410248fde7161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d90ff69cbce38cdb51e6c2f96265b44bdb1c974990feb33a8fe410248fde7161->leave($__internal_d90ff69cbce38cdb51e6c2f96265b44bdb1c974990feb33a8fe410248fde7161_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_83b6843e10a94a55c9cd1bd8f4b778c95fe294224b8b5144ccf671d9c95a7b0d = $this->env->getExtension("native_profiler");
        $__internal_83b6843e10a94a55c9cd1bd8f4b778c95fe294224b8b5144ccf671d9c95a7b0d->enter($__internal_83b6843e10a94a55c9cd1bd8f4b778c95fe294224b8b5144ccf671d9c95a7b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_83b6843e10a94a55c9cd1bd8f4b778c95fe294224b8b5144ccf671d9c95a7b0d->leave($__internal_83b6843e10a94a55c9cd1bd8f4b778c95fe294224b8b5144ccf671d9c95a7b0d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_037e1587b1fa2d7fc37a8d70ac77c544bd8da8043d3769651dab9e2a32dc712e = $this->env->getExtension("native_profiler");
        $__internal_037e1587b1fa2d7fc37a8d70ac77c544bd8da8043d3769651dab9e2a32dc712e->enter($__internal_037e1587b1fa2d7fc37a8d70ac77c544bd8da8043d3769651dab9e2a32dc712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_037e1587b1fa2d7fc37a8d70ac77c544bd8da8043d3769651dab9e2a32dc712e->leave($__internal_037e1587b1fa2d7fc37a8d70ac77c544bd8da8043d3769651dab9e2a32dc712e_prof);

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
