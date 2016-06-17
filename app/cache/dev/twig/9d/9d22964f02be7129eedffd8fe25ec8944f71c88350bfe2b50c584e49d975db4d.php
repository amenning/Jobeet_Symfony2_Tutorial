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
        $__internal_835a3912c413c4acaa46edd81f2fcb653968bf9518b48623ac6478bbcebd1a8f = $this->env->getExtension("native_profiler");
        $__internal_835a3912c413c4acaa46edd81f2fcb653968bf9518b48623ac6478bbcebd1a8f->enter($__internal_835a3912c413c4acaa46edd81f2fcb653968bf9518b48623ac6478bbcebd1a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835a3912c413c4acaa46edd81f2fcb653968bf9518b48623ac6478bbcebd1a8f->leave($__internal_835a3912c413c4acaa46edd81f2fcb653968bf9518b48623ac6478bbcebd1a8f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_75bdffa593cf0d1f54dbb4dbf0b50444fee1dfe214c3903135e5f20bc94b57b9 = $this->env->getExtension("native_profiler");
        $__internal_75bdffa593cf0d1f54dbb4dbf0b50444fee1dfe214c3903135e5f20bc94b57b9->enter($__internal_75bdffa593cf0d1f54dbb4dbf0b50444fee1dfe214c3903135e5f20bc94b57b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_75bdffa593cf0d1f54dbb4dbf0b50444fee1dfe214c3903135e5f20bc94b57b9->leave($__internal_75bdffa593cf0d1f54dbb4dbf0b50444fee1dfe214c3903135e5f20bc94b57b9_prof);

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
