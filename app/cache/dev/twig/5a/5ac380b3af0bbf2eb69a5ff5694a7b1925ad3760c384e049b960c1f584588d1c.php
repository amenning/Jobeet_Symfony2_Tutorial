<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c627b2fe043b392d7d5586bdb0c0e07bdbe08da58e1b1a5de196c9524ce7baed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdd3d68fe3745198d635bc10d748162d4d3ffdc6e18f3e22bfee73252b01d528 = $this->env->getExtension("native_profiler");
        $__internal_cdd3d68fe3745198d635bc10d748162d4d3ffdc6e18f3e22bfee73252b01d528->enter($__internal_cdd3d68fe3745198d635bc10d748162d4d3ffdc6e18f3e22bfee73252b01d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd3d68fe3745198d635bc10d748162d4d3ffdc6e18f3e22bfee73252b01d528->leave($__internal_cdd3d68fe3745198d635bc10d748162d4d3ffdc6e18f3e22bfee73252b01d528_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_68a51842d55058dbe5b26fd1fb569413677159f130a84cf42b4e6d7781e8eaec = $this->env->getExtension("native_profiler");
        $__internal_68a51842d55058dbe5b26fd1fb569413677159f130a84cf42b4e6d7781e8eaec->enter($__internal_68a51842d55058dbe5b26fd1fb569413677159f130a84cf42b4e6d7781e8eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_68a51842d55058dbe5b26fd1fb569413677159f130a84cf42b4e6d7781e8eaec->leave($__internal_68a51842d55058dbe5b26fd1fb569413677159f130a84cf42b4e6d7781e8eaec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
