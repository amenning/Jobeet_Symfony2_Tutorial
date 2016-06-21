<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2791caa51b0d490b9d77346d1fc3cfe74cb9e3429d6e3716a72f11b7877f30d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853edd8c04c35953373e99702aebce4a96203669d606e54c57e27f40a6c213ec = $this->env->getExtension("native_profiler");
        $__internal_853edd8c04c35953373e99702aebce4a96203669d606e54c57e27f40a6c213ec->enter($__internal_853edd8c04c35953373e99702aebce4a96203669d606e54c57e27f40a6c213ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853edd8c04c35953373e99702aebce4a96203669d606e54c57e27f40a6c213ec->leave($__internal_853edd8c04c35953373e99702aebce4a96203669d606e54c57e27f40a6c213ec_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e7752c416cdefa5c1727e43ca572ca4ab203aaea88efff4e3d2b8b8d0d268be0 = $this->env->getExtension("native_profiler");
        $__internal_e7752c416cdefa5c1727e43ca572ca4ab203aaea88efff4e3d2b8b8d0d268be0->enter($__internal_e7752c416cdefa5c1727e43ca572ca4ab203aaea88efff4e3d2b8b8d0d268be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_e7752c416cdefa5c1727e43ca572ca4ab203aaea88efff4e3d2b8b8d0d268be0->leave($__internal_e7752c416cdefa5c1727e43ca572ca4ab203aaea88efff4e3d2b8b8d0d268be0_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_803233149a83ff88f2266f554dd129e08b9f29200d30856db02d318b9465b1ab = $this->env->getExtension("native_profiler");
        $__internal_803233149a83ff88f2266f554dd129e08b9f29200d30856db02d318b9465b1ab->enter($__internal_803233149a83ff88f2266f554dd129e08b9f29200d30856db02d318b9465b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_803233149a83ff88f2266f554dd129e08b9f29200d30856db02d318b9465b1ab->leave($__internal_803233149a83ff88f2266f554dd129e08b9f29200d30856db02d318b9465b1ab_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2858e1c67d4f8a1a97355ed35317f7a0480ab3b2a6f7b0aca66258a16d5b1ca = $this->env->getExtension("native_profiler");
        $__internal_e2858e1c67d4f8a1a97355ed35317f7a0480ab3b2a6f7b0aca66258a16d5b1ca->enter($__internal_e2858e1c67d4f8a1a97355ed35317f7a0480ab3b2a6f7b0aca66258a16d5b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_e2858e1c67d4f8a1a97355ed35317f7a0480ab3b2a6f7b0aca66258a16d5b1ca->leave($__internal_e2858e1c67d4f8a1a97355ed35317f7a0480ab3b2a6f7b0aca66258a16d5b1ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
