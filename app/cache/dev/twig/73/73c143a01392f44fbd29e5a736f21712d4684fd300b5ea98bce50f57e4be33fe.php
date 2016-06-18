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
        $__internal_a4cedab76e2f398ee4bf4c48b32f622ce17386a136053fd3f8d7c0146a5326d7 = $this->env->getExtension("native_profiler");
        $__internal_a4cedab76e2f398ee4bf4c48b32f622ce17386a136053fd3f8d7c0146a5326d7->enter($__internal_a4cedab76e2f398ee4bf4c48b32f622ce17386a136053fd3f8d7c0146a5326d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4cedab76e2f398ee4bf4c48b32f622ce17386a136053fd3f8d7c0146a5326d7->leave($__internal_a4cedab76e2f398ee4bf4c48b32f622ce17386a136053fd3f8d7c0146a5326d7_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b9284747f0d816391cb805b879225200a94ad13513ee8d03e1b12081db09fbeb = $this->env->getExtension("native_profiler");
        $__internal_b9284747f0d816391cb805b879225200a94ad13513ee8d03e1b12081db09fbeb->enter($__internal_b9284747f0d816391cb805b879225200a94ad13513ee8d03e1b12081db09fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b9284747f0d816391cb805b879225200a94ad13513ee8d03e1b12081db09fbeb->leave($__internal_b9284747f0d816391cb805b879225200a94ad13513ee8d03e1b12081db09fbeb_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c75275a4d5df85ccefadb6829977eae237ad7e7ae64efd9c0b37064b23b27b98 = $this->env->getExtension("native_profiler");
        $__internal_c75275a4d5df85ccefadb6829977eae237ad7e7ae64efd9c0b37064b23b27b98->enter($__internal_c75275a4d5df85ccefadb6829977eae237ad7e7ae64efd9c0b37064b23b27b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c75275a4d5df85ccefadb6829977eae237ad7e7ae64efd9c0b37064b23b27b98->leave($__internal_c75275a4d5df85ccefadb6829977eae237ad7e7ae64efd9c0b37064b23b27b98_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a46e3c7c8ac791352cf6cef67daa893143077257b22bc4351383d44bc446a8de = $this->env->getExtension("native_profiler");
        $__internal_a46e3c7c8ac791352cf6cef67daa893143077257b22bc4351383d44bc446a8de->enter($__internal_a46e3c7c8ac791352cf6cef67daa893143077257b22bc4351383d44bc446a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a46e3c7c8ac791352cf6cef67daa893143077257b22bc4351383d44bc446a8de->leave($__internal_a46e3c7c8ac791352cf6cef67daa893143077257b22bc4351383d44bc446a8de_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_92861b45d19541e5e4e092aac9520d8db63e0b2b3c6a374a489fc1fe59771f48 = $this->env->getExtension("native_profiler");
        $__internal_92861b45d19541e5e4e092aac9520d8db63e0b2b3c6a374a489fc1fe59771f48->enter($__internal_92861b45d19541e5e4e092aac9520d8db63e0b2b3c6a374a489fc1fe59771f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_92861b45d19541e5e4e092aac9520d8db63e0b2b3c6a374a489fc1fe59771f48->leave($__internal_92861b45d19541e5e4e092aac9520d8db63e0b2b3c6a374a489fc1fe59771f48_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_866f5128ae410ca9cd381046423db15f7aa9cf5c954ece1d87b23f27fa03833d = $this->env->getExtension("native_profiler");
        $__internal_866f5128ae410ca9cd381046423db15f7aa9cf5c954ece1d87b23f27fa03833d->enter($__internal_866f5128ae410ca9cd381046423db15f7aa9cf5c954ece1d87b23f27fa03833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_866f5128ae410ca9cd381046423db15f7aa9cf5c954ece1d87b23f27fa03833d->leave($__internal_866f5128ae410ca9cd381046423db15f7aa9cf5c954ece1d87b23f27fa03833d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3965280621bb51cd014ccd68ca48d9d75f5803265e4121ee4ea1ab4a73564ebe = $this->env->getExtension("native_profiler");
        $__internal_3965280621bb51cd014ccd68ca48d9d75f5803265e4121ee4ea1ab4a73564ebe->enter($__internal_3965280621bb51cd014ccd68ca48d9d75f5803265e4121ee4ea1ab4a73564ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3965280621bb51cd014ccd68ca48d9d75f5803265e4121ee4ea1ab4a73564ebe->leave($__internal_3965280621bb51cd014ccd68ca48d9d75f5803265e4121ee4ea1ab4a73564ebe_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_0edd6f9a55da67c1c6f4bdab25fa85bd240534fe656ffea0efe551f4f4b761e5 = $this->env->getExtension("native_profiler");
        $__internal_0edd6f9a55da67c1c6f4bdab25fa85bd240534fe656ffea0efe551f4f4b761e5->enter($__internal_0edd6f9a55da67c1c6f4bdab25fa85bd240534fe656ffea0efe551f4f4b761e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_0edd6f9a55da67c1c6f4bdab25fa85bd240534fe656ffea0efe551f4f4b761e5->leave($__internal_0edd6f9a55da67c1c6f4bdab25fa85bd240534fe656ffea0efe551f4f4b761e5_prof);

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
