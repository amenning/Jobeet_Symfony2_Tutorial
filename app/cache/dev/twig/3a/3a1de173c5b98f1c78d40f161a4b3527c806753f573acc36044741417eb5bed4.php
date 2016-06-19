<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_a6a341c7aa13bba80f02ace27ea4efe942b6ddcb267516856ed2670aae25b442 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b218ddf9be543bade65615f8fed84b3407905c2217daf0f045e64f8dc5164fc3 = $this->env->getExtension("native_profiler");
        $__internal_b218ddf9be543bade65615f8fed84b3407905c2217daf0f045e64f8dc5164fc3->enter($__internal_b218ddf9be543bade65615f8fed84b3407905c2217daf0f045e64f8dc5164fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b218ddf9be543bade65615f8fed84b3407905c2217daf0f045e64f8dc5164fc3->leave($__internal_b218ddf9be543bade65615f8fed84b3407905c2217daf0f045e64f8dc5164fc3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c34eb1a69bf6788854e97d657978746dae2b716f8c8382e7d0f4b20a05a0eecd = $this->env->getExtension("native_profiler");
        $__internal_c34eb1a69bf6788854e97d657978746dae2b716f8c8382e7d0f4b20a05a0eecd->enter($__internal_c34eb1a69bf6788854e97d657978746dae2b716f8c8382e7d0f4b20a05a0eecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_c34eb1a69bf6788854e97d657978746dae2b716f8c8382e7d0f4b20a05a0eecd->leave($__internal_c34eb1a69bf6788854e97d657978746dae2b716f8c8382e7d0f4b20a05a0eecd_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_70bf4fdbd6090994e94e31e9592b99ed7f9cf2489244dc1507c8c5b679168ba9 = $this->env->getExtension("native_profiler");
        $__internal_70bf4fdbd6090994e94e31e9592b99ed7f9cf2489244dc1507c8c5b679168ba9->enter($__internal_70bf4fdbd6090994e94e31e9592b99ed7f9cf2489244dc1507c8c5b679168ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_70bf4fdbd6090994e94e31e9592b99ed7f9cf2489244dc1507c8c5b679168ba9->leave($__internal_70bf4fdbd6090994e94e31e9592b99ed7f9cf2489244dc1507c8c5b679168ba9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9190f34352546a3edf4f2217786088d8e8db6a08bde9cb6e1749b5edaf33c3f = $this->env->getExtension("native_profiler");
        $__internal_d9190f34352546a3edf4f2217786088d8e8db6a08bde9cb6e1749b5edaf33c3f->enter($__internal_d9190f34352546a3edf4f2217786088d8e8db6a08bde9cb6e1749b5edaf33c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_d9190f34352546a3edf4f2217786088d8e8db6a08bde9cb6e1749b5edaf33c3f->leave($__internal_d9190f34352546a3edf4f2217786088d8e8db6a08bde9cb6e1749b5edaf33c3f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
