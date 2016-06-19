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
        $__internal_e789e8af72c5c721278f7650dcdfc9ddbff88679666d160fc97e05d7f862ae9a = $this->env->getExtension("native_profiler");
        $__internal_e789e8af72c5c721278f7650dcdfc9ddbff88679666d160fc97e05d7f862ae9a->enter($__internal_e789e8af72c5c721278f7650dcdfc9ddbff88679666d160fc97e05d7f862ae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e789e8af72c5c721278f7650dcdfc9ddbff88679666d160fc97e05d7f862ae9a->leave($__internal_e789e8af72c5c721278f7650dcdfc9ddbff88679666d160fc97e05d7f862ae9a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_3ce7c47e453833b9e911836ba884060b4c3f0c5f104e0c7535c10785c90fd541 = $this->env->getExtension("native_profiler");
        $__internal_3ce7c47e453833b9e911836ba884060b4c3f0c5f104e0c7535c10785c90fd541->enter($__internal_3ce7c47e453833b9e911836ba884060b4c3f0c5f104e0c7535c10785c90fd541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_3ce7c47e453833b9e911836ba884060b4c3f0c5f104e0c7535c10785c90fd541->leave($__internal_3ce7c47e453833b9e911836ba884060b4c3f0c5f104e0c7535c10785c90fd541_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_376b1f402d59ea1823a8e592ebc738877e1bc43345d23f0c10e557c21bf8c0d5 = $this->env->getExtension("native_profiler");
        $__internal_376b1f402d59ea1823a8e592ebc738877e1bc43345d23f0c10e557c21bf8c0d5->enter($__internal_376b1f402d59ea1823a8e592ebc738877e1bc43345d23f0c10e557c21bf8c0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_376b1f402d59ea1823a8e592ebc738877e1bc43345d23f0c10e557c21bf8c0d5->leave($__internal_376b1f402d59ea1823a8e592ebc738877e1bc43345d23f0c10e557c21bf8c0d5_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8e056b0655877095313a53776b5cb397bf37fc3904fe3065422d1b812eb08f84 = $this->env->getExtension("native_profiler");
        $__internal_8e056b0655877095313a53776b5cb397bf37fc3904fe3065422d1b812eb08f84->enter($__internal_8e056b0655877095313a53776b5cb397bf37fc3904fe3065422d1b812eb08f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_8e056b0655877095313a53776b5cb397bf37fc3904fe3065422d1b812eb08f84->leave($__internal_8e056b0655877095313a53776b5cb397bf37fc3904fe3065422d1b812eb08f84_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_393e0653be2880a9136019981b70b8009cf351befe39a22210a47bcc2c9313c2 = $this->env->getExtension("native_profiler");
        $__internal_393e0653be2880a9136019981b70b8009cf351befe39a22210a47bcc2c9313c2->enter($__internal_393e0653be2880a9136019981b70b8009cf351befe39a22210a47bcc2c9313c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_393e0653be2880a9136019981b70b8009cf351befe39a22210a47bcc2c9313c2->leave($__internal_393e0653be2880a9136019981b70b8009cf351befe39a22210a47bcc2c9313c2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30ddf77f2e62963213a720c87f3ec149bc01cfa4ade4092ac321b3ff910f3152 = $this->env->getExtension("native_profiler");
        $__internal_30ddf77f2e62963213a720c87f3ec149bc01cfa4ade4092ac321b3ff910f3152->enter($__internal_30ddf77f2e62963213a720c87f3ec149bc01cfa4ade4092ac321b3ff910f3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_30ddf77f2e62963213a720c87f3ec149bc01cfa4ade4092ac321b3ff910f3152->leave($__internal_30ddf77f2e62963213a720c87f3ec149bc01cfa4ade4092ac321b3ff910f3152_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a1fa8c9b511e791f9e9d3e54d41fc6fbc03ac5cf9034da12de51e6f36d0a5846 = $this->env->getExtension("native_profiler");
        $__internal_a1fa8c9b511e791f9e9d3e54d41fc6fbc03ac5cf9034da12de51e6f36d0a5846->enter($__internal_a1fa8c9b511e791f9e9d3e54d41fc6fbc03ac5cf9034da12de51e6f36d0a5846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_a1fa8c9b511e791f9e9d3e54d41fc6fbc03ac5cf9034da12de51e6f36d0a5846->leave($__internal_a1fa8c9b511e791f9e9d3e54d41fc6fbc03ac5cf9034da12de51e6f36d0a5846_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_bc73e3e78a4144eab7000fefb34a6c27c845edcc64201716efb8980d8ff6b133 = $this->env->getExtension("native_profiler");
        $__internal_bc73e3e78a4144eab7000fefb34a6c27c845edcc64201716efb8980d8ff6b133->enter($__internal_bc73e3e78a4144eab7000fefb34a6c27c845edcc64201716efb8980d8ff6b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_bc73e3e78a4144eab7000fefb34a6c27c845edcc64201716efb8980d8ff6b133->leave($__internal_bc73e3e78a4144eab7000fefb34a6c27c845edcc64201716efb8980d8ff6b133_prof);

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
