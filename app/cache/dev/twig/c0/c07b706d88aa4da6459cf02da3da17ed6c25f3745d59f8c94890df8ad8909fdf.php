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
        $__internal_ca97303c129ef9baeb691de2380fc17df81a9142f906ea9cf1ba835a0433e9f3 = $this->env->getExtension("native_profiler");
        $__internal_ca97303c129ef9baeb691de2380fc17df81a9142f906ea9cf1ba835a0433e9f3->enter($__internal_ca97303c129ef9baeb691de2380fc17df81a9142f906ea9cf1ba835a0433e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca97303c129ef9baeb691de2380fc17df81a9142f906ea9cf1ba835a0433e9f3->leave($__internal_ca97303c129ef9baeb691de2380fc17df81a9142f906ea9cf1ba835a0433e9f3_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_4fbe874856b84757de8a5dda34b929bcf94035ebc163bd718b69869e05dc2075 = $this->env->getExtension("native_profiler");
        $__internal_4fbe874856b84757de8a5dda34b929bcf94035ebc163bd718b69869e05dc2075->enter($__internal_4fbe874856b84757de8a5dda34b929bcf94035ebc163bd718b69869e05dc2075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_4fbe874856b84757de8a5dda34b929bcf94035ebc163bd718b69869e05dc2075->leave($__internal_4fbe874856b84757de8a5dda34b929bcf94035ebc163bd718b69869e05dc2075_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_695c82e5a31564d128246b3d30e705484f9964fea477f3610a5037cdd4b5e3f7 = $this->env->getExtension("native_profiler");
        $__internal_695c82e5a31564d128246b3d30e705484f9964fea477f3610a5037cdd4b5e3f7->enter($__internal_695c82e5a31564d128246b3d30e705484f9964fea477f3610a5037cdd4b5e3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_695c82e5a31564d128246b3d30e705484f9964fea477f3610a5037cdd4b5e3f7->leave($__internal_695c82e5a31564d128246b3d30e705484f9964fea477f3610a5037cdd4b5e3f7_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_63f4c96cfa779825a1e312cfba58ed89aba73e01be27ef60ea3d2eaeef848c3a = $this->env->getExtension("native_profiler");
        $__internal_63f4c96cfa779825a1e312cfba58ed89aba73e01be27ef60ea3d2eaeef848c3a->enter($__internal_63f4c96cfa779825a1e312cfba58ed89aba73e01be27ef60ea3d2eaeef848c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_63f4c96cfa779825a1e312cfba58ed89aba73e01be27ef60ea3d2eaeef848c3a->leave($__internal_63f4c96cfa779825a1e312cfba58ed89aba73e01be27ef60ea3d2eaeef848c3a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b69add37aaaae5b44024aa0f54a37766c5148b324cee22747896490709c7caee = $this->env->getExtension("native_profiler");
        $__internal_b69add37aaaae5b44024aa0f54a37766c5148b324cee22747896490709c7caee->enter($__internal_b69add37aaaae5b44024aa0f54a37766c5148b324cee22747896490709c7caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b69add37aaaae5b44024aa0f54a37766c5148b324cee22747896490709c7caee->leave($__internal_b69add37aaaae5b44024aa0f54a37766c5148b324cee22747896490709c7caee_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73409dfd9ea756f284d9cba66fb339e4904637abee991e2fd4dde8c354d151c7 = $this->env->getExtension("native_profiler");
        $__internal_73409dfd9ea756f284d9cba66fb339e4904637abee991e2fd4dde8c354d151c7->enter($__internal_73409dfd9ea756f284d9cba66fb339e4904637abee991e2fd4dde8c354d151c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_73409dfd9ea756f284d9cba66fb339e4904637abee991e2fd4dde8c354d151c7->leave($__internal_73409dfd9ea756f284d9cba66fb339e4904637abee991e2fd4dde8c354d151c7_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_67e7a7ebc8e900717d62cfddbe6e365aa91b1371508ec27b71060de555d27060 = $this->env->getExtension("native_profiler");
        $__internal_67e7a7ebc8e900717d62cfddbe6e365aa91b1371508ec27b71060de555d27060->enter($__internal_67e7a7ebc8e900717d62cfddbe6e365aa91b1371508ec27b71060de555d27060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_67e7a7ebc8e900717d62cfddbe6e365aa91b1371508ec27b71060de555d27060->leave($__internal_67e7a7ebc8e900717d62cfddbe6e365aa91b1371508ec27b71060de555d27060_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_9bd5cac2a708e43f270c2b8f5a84cf307b2067bb1c18ab5ad4f8f930fac9b478 = $this->env->getExtension("native_profiler");
        $__internal_9bd5cac2a708e43f270c2b8f5a84cf307b2067bb1c18ab5ad4f8f930fac9b478->enter($__internal_9bd5cac2a708e43f270c2b8f5a84cf307b2067bb1c18ab5ad4f8f930fac9b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_9bd5cac2a708e43f270c2b8f5a84cf307b2067bb1c18ab5ad4f8f930fac9b478->leave($__internal_9bd5cac2a708e43f270c2b8f5a84cf307b2067bb1c18ab5ad4f8f930fac9b478_prof);

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
