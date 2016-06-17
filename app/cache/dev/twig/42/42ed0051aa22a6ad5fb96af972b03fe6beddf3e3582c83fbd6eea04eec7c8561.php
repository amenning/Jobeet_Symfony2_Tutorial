<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_14bd057c6fc3c631b2356a7f55c4196738c383e9a5ec229a3d46d18a3eab925b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada9587acf7cea305b360bdbc74bfdf284df284df0c39fdc4a19014f607f12a7 = $this->env->getExtension("native_profiler");
        $__internal_ada9587acf7cea305b360bdbc74bfdf284df284df0c39fdc4a19014f607f12a7->enter($__internal_ada9587acf7cea305b360bdbc74bfdf284df284df0c39fdc4a19014f607f12a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada9587acf7cea305b360bdbc74bfdf284df284df0c39fdc4a19014f607f12a7->leave($__internal_ada9587acf7cea305b360bdbc74bfdf284df284df0c39fdc4a19014f607f12a7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_9131d1ca7a4045d9a10e2883d3e509ab7848c81b5680d57813534fdcff1bf76d = $this->env->getExtension("native_profiler");
        $__internal_9131d1ca7a4045d9a10e2883d3e509ab7848c81b5680d57813534fdcff1bf76d->enter($__internal_9131d1ca7a4045d9a10e2883d3e509ab7848c81b5680d57813534fdcff1bf76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9131d1ca7a4045d9a10e2883d3e509ab7848c81b5680d57813534fdcff1bf76d->leave($__internal_9131d1ca7a4045d9a10e2883d3e509ab7848c81b5680d57813534fdcff1bf76d_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9e76f2d136b96e8abfc4d81316e0edb53780d2bc2b8c2f9fea050b84e394af92 = $this->env->getExtension("native_profiler");
        $__internal_9e76f2d136b96e8abfc4d81316e0edb53780d2bc2b8c2f9fea050b84e394af92->enter($__internal_9e76f2d136b96e8abfc4d81316e0edb53780d2bc2b8c2f9fea050b84e394af92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9e76f2d136b96e8abfc4d81316e0edb53780d2bc2b8c2f9fea050b84e394af92->leave($__internal_9e76f2d136b96e8abfc4d81316e0edb53780d2bc2b8c2f9fea050b84e394af92_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_42fb0b5d1f514c443ac50e349af4e6bb443566e85752a38ba30bb4bc1b293b85 = $this->env->getExtension("native_profiler");
        $__internal_42fb0b5d1f514c443ac50e349af4e6bb443566e85752a38ba30bb4bc1b293b85->enter($__internal_42fb0b5d1f514c443ac50e349af4e6bb443566e85752a38ba30bb4bc1b293b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_42fb0b5d1f514c443ac50e349af4e6bb443566e85752a38ba30bb4bc1b293b85->leave($__internal_42fb0b5d1f514c443ac50e349af4e6bb443566e85752a38ba30bb4bc1b293b85_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_df2da404c9d342134afe7b30f5c10479687d45668c17556d04f1b448d30d4b43 = $this->env->getExtension("native_profiler");
        $__internal_df2da404c9d342134afe7b30f5c10479687d45668c17556d04f1b448d30d4b43->enter($__internal_df2da404c9d342134afe7b30f5c10479687d45668c17556d04f1b448d30d4b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_df2da404c9d342134afe7b30f5c10479687d45668c17556d04f1b448d30d4b43->leave($__internal_df2da404c9d342134afe7b30f5c10479687d45668c17556d04f1b448d30d4b43_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_2ee64207a978356c50f5670db439ec9646c4273ec11959ad748298ede44def32 = $this->env->getExtension("native_profiler");
        $__internal_2ee64207a978356c50f5670db439ec9646c4273ec11959ad748298ede44def32->enter($__internal_2ee64207a978356c50f5670db439ec9646c4273ec11959ad748298ede44def32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2ee64207a978356c50f5670db439ec9646c4273ec11959ad748298ede44def32->leave($__internal_2ee64207a978356c50f5670db439ec9646c4273ec11959ad748298ede44def32_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
