<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_97b50fb1edd237d1c0478c6903f8942a6f217be91e80d6583d8dcd7b7885f30d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eee99fd01402ce214f7edaa5e89a9dd78075067e3533b190d30e82ac8b1d7e3 = $this->env->getExtension("native_profiler");
        $__internal_3eee99fd01402ce214f7edaa5e89a9dd78075067e3533b190d30e82ac8b1d7e3->enter($__internal_3eee99fd01402ce214f7edaa5e89a9dd78075067e3533b190d30e82ac8b1d7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eee99fd01402ce214f7edaa5e89a9dd78075067e3533b190d30e82ac8b1d7e3->leave($__internal_3eee99fd01402ce214f7edaa5e89a9dd78075067e3533b190d30e82ac8b1d7e3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4ce59a72334b85a6cfaea7bfe3ee8c566235e9c38bb93f6ac93c43e70d0b2b19 = $this->env->getExtension("native_profiler");
        $__internal_4ce59a72334b85a6cfaea7bfe3ee8c566235e9c38bb93f6ac93c43e70d0b2b19->enter($__internal_4ce59a72334b85a6cfaea7bfe3ee8c566235e9c38bb93f6ac93c43e70d0b2b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_4ce59a72334b85a6cfaea7bfe3ee8c566235e9c38bb93f6ac93c43e70d0b2b19->leave($__internal_4ce59a72334b85a6cfaea7bfe3ee8c566235e9c38bb93f6ac93c43e70d0b2b19_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
