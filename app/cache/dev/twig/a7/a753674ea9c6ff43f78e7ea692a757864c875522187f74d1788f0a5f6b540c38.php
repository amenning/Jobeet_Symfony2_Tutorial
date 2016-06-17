<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_9386d85edcb0dc43f53bd388a34aa67a4e9a971a0d24302fc9f0b3f25b9127f4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fccded0a862f040b1ac808e4dd2ea5367e27f266a91ff76528fa5b133311e06d = $this->env->getExtension("native_profiler");
        $__internal_fccded0a862f040b1ac808e4dd2ea5367e27f266a91ff76528fa5b133311e06d->enter($__internal_fccded0a862f040b1ac808e4dd2ea5367e27f266a91ff76528fa5b133311e06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccded0a862f040b1ac808e4dd2ea5367e27f266a91ff76528fa5b133311e06d->leave($__internal_fccded0a862f040b1ac808e4dd2ea5367e27f266a91ff76528fa5b133311e06d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b3141bb170a3741405300a3117deb8b585d37a93084412fd352656e10218ffc5 = $this->env->getExtension("native_profiler");
        $__internal_b3141bb170a3741405300a3117deb8b585d37a93084412fd352656e10218ffc5->enter($__internal_b3141bb170a3741405300a3117deb8b585d37a93084412fd352656e10218ffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b3141bb170a3741405300a3117deb8b585d37a93084412fd352656e10218ffc5->leave($__internal_b3141bb170a3741405300a3117deb8b585d37a93084412fd352656e10218ffc5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
