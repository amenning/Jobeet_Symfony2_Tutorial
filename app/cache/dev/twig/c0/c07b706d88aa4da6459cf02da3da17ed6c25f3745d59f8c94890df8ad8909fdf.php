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
        $__internal_1ea411d304f978f9eca268083fd78ad70e0c4e307b241b5486e1a77762e1a3ac = $this->env->getExtension("native_profiler");
        $__internal_1ea411d304f978f9eca268083fd78ad70e0c4e307b241b5486e1a77762e1a3ac->enter($__internal_1ea411d304f978f9eca268083fd78ad70e0c4e307b241b5486e1a77762e1a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea411d304f978f9eca268083fd78ad70e0c4e307b241b5486e1a77762e1a3ac->leave($__internal_1ea411d304f978f9eca268083fd78ad70e0c4e307b241b5486e1a77762e1a3ac_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_f45252b95a543a530948795789815b4975d17d470892ebd3b62197d4e76af7b0 = $this->env->getExtension("native_profiler");
        $__internal_f45252b95a543a530948795789815b4975d17d470892ebd3b62197d4e76af7b0->enter($__internal_f45252b95a543a530948795789815b4975d17d470892ebd3b62197d4e76af7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_f45252b95a543a530948795789815b4975d17d470892ebd3b62197d4e76af7b0->leave($__internal_f45252b95a543a530948795789815b4975d17d470892ebd3b62197d4e76af7b0_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9e63aa97892b4d6173bfd8d0e1ad11c8914c0ac213af353db4da229ca0c13786 = $this->env->getExtension("native_profiler");
        $__internal_9e63aa97892b4d6173bfd8d0e1ad11c8914c0ac213af353db4da229ca0c13786->enter($__internal_9e63aa97892b4d6173bfd8d0e1ad11c8914c0ac213af353db4da229ca0c13786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9e63aa97892b4d6173bfd8d0e1ad11c8914c0ac213af353db4da229ca0c13786->leave($__internal_9e63aa97892b4d6173bfd8d0e1ad11c8914c0ac213af353db4da229ca0c13786_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e7ad9bc8b1a94a48a9f28b65a707f74f591c7706b0eba93e5846c34e52f68913 = $this->env->getExtension("native_profiler");
        $__internal_e7ad9bc8b1a94a48a9f28b65a707f74f591c7706b0eba93e5846c34e52f68913->enter($__internal_e7ad9bc8b1a94a48a9f28b65a707f74f591c7706b0eba93e5846c34e52f68913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e7ad9bc8b1a94a48a9f28b65a707f74f591c7706b0eba93e5846c34e52f68913->leave($__internal_e7ad9bc8b1a94a48a9f28b65a707f74f591c7706b0eba93e5846c34e52f68913_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b55d6be817ec127a7d830cafc410dc44aa1ae006ad136f13b6fc0b7bcc93ecd2 = $this->env->getExtension("native_profiler");
        $__internal_b55d6be817ec127a7d830cafc410dc44aa1ae006ad136f13b6fc0b7bcc93ecd2->enter($__internal_b55d6be817ec127a7d830cafc410dc44aa1ae006ad136f13b6fc0b7bcc93ecd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b55d6be817ec127a7d830cafc410dc44aa1ae006ad136f13b6fc0b7bcc93ecd2->leave($__internal_b55d6be817ec127a7d830cafc410dc44aa1ae006ad136f13b6fc0b7bcc93ecd2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ed6bbc93c8b2928083a3ef63427ae2030a9137d2face6d822012e58461731d2 = $this->env->getExtension("native_profiler");
        $__internal_4ed6bbc93c8b2928083a3ef63427ae2030a9137d2face6d822012e58461731d2->enter($__internal_4ed6bbc93c8b2928083a3ef63427ae2030a9137d2face6d822012e58461731d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4ed6bbc93c8b2928083a3ef63427ae2030a9137d2face6d822012e58461731d2->leave($__internal_4ed6bbc93c8b2928083a3ef63427ae2030a9137d2face6d822012e58461731d2_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f0a9b00a231b37c6a5e796c3e53dfd56d24009289c579d0d909e9e9856f83533 = $this->env->getExtension("native_profiler");
        $__internal_f0a9b00a231b37c6a5e796c3e53dfd56d24009289c579d0d909e9e9856f83533->enter($__internal_f0a9b00a231b37c6a5e796c3e53dfd56d24009289c579d0d909e9e9856f83533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f0a9b00a231b37c6a5e796c3e53dfd56d24009289c579d0d909e9e9856f83533->leave($__internal_f0a9b00a231b37c6a5e796c3e53dfd56d24009289c579d0d909e9e9856f83533_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_cfa2d24575e1f20ae34b7ac61bb084f74346c190054ef4d31eaae01c7af1ba6b = $this->env->getExtension("native_profiler");
        $__internal_cfa2d24575e1f20ae34b7ac61bb084f74346c190054ef4d31eaae01c7af1ba6b->enter($__internal_cfa2d24575e1f20ae34b7ac61bb084f74346c190054ef4d31eaae01c7af1ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_cfa2d24575e1f20ae34b7ac61bb084f74346c190054ef4d31eaae01c7af1ba6b->leave($__internal_cfa2d24575e1f20ae34b7ac61bb084f74346c190054ef4d31eaae01c7af1ba6b_prof);

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
