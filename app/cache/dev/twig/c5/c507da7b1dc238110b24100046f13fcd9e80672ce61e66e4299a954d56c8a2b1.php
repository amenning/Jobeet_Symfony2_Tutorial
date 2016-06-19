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
        $__internal_f490c23782b623ac280d059775d8268a1629b25b9d6ea85f6142e0d442832cd8 = $this->env->getExtension("native_profiler");
        $__internal_f490c23782b623ac280d059775d8268a1629b25b9d6ea85f6142e0d442832cd8->enter($__internal_f490c23782b623ac280d059775d8268a1629b25b9d6ea85f6142e0d442832cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f490c23782b623ac280d059775d8268a1629b25b9d6ea85f6142e0d442832cd8->leave($__internal_f490c23782b623ac280d059775d8268a1629b25b9d6ea85f6142e0d442832cd8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_36879e2d4b6767195b151221153c4079f5a2212d169c30d595649036a3b5913a = $this->env->getExtension("native_profiler");
        $__internal_36879e2d4b6767195b151221153c4079f5a2212d169c30d595649036a3b5913a->enter($__internal_36879e2d4b6767195b151221153c4079f5a2212d169c30d595649036a3b5913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_36879e2d4b6767195b151221153c4079f5a2212d169c30d595649036a3b5913a->leave($__internal_36879e2d4b6767195b151221153c4079f5a2212d169c30d595649036a3b5913a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_eb08c56d86036ae6d8b5d2011d42133d0ee99bda7a1c27662b9ef0f375d100fb = $this->env->getExtension("native_profiler");
        $__internal_eb08c56d86036ae6d8b5d2011d42133d0ee99bda7a1c27662b9ef0f375d100fb->enter($__internal_eb08c56d86036ae6d8b5d2011d42133d0ee99bda7a1c27662b9ef0f375d100fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_eb08c56d86036ae6d8b5d2011d42133d0ee99bda7a1c27662b9ef0f375d100fb->leave($__internal_eb08c56d86036ae6d8b5d2011d42133d0ee99bda7a1c27662b9ef0f375d100fb_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_c738c564a3f00c5e4695663fefaa3c0d1375a84c1887b72cd4019f94fcb51cbc = $this->env->getExtension("native_profiler");
        $__internal_c738c564a3f00c5e4695663fefaa3c0d1375a84c1887b72cd4019f94fcb51cbc->enter($__internal_c738c564a3f00c5e4695663fefaa3c0d1375a84c1887b72cd4019f94fcb51cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c738c564a3f00c5e4695663fefaa3c0d1375a84c1887b72cd4019f94fcb51cbc->leave($__internal_c738c564a3f00c5e4695663fefaa3c0d1375a84c1887b72cd4019f94fcb51cbc_prof);

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
