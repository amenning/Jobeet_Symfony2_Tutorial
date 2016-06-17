<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_f610eb871bdfa200ff3a861694fd1300bf39d7ce2c53077e6302ad14cd4546a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e2b6e4bc1c4bd2a572251437fdf58ca3bead467e2765e8a5130c6a6c5bbedc4 = $this->env->getExtension("native_profiler");
        $__internal_7e2b6e4bc1c4bd2a572251437fdf58ca3bead467e2765e8a5130c6a6c5bbedc4->enter($__internal_7e2b6e4bc1c4bd2a572251437fdf58ca3bead467e2765e8a5130c6a6c5bbedc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2b6e4bc1c4bd2a572251437fdf58ca3bead467e2765e8a5130c6a6c5bbedc4->leave($__internal_7e2b6e4bc1c4bd2a572251437fdf58ca3bead467e2765e8a5130c6a6c5bbedc4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_59396c5425f112b427d932648bcfb0ecaec9de06741471fbb2732b30f2a0883d = $this->env->getExtension("native_profiler");
        $__internal_59396c5425f112b427d932648bcfb0ecaec9de06741471fbb2732b30f2a0883d->enter($__internal_59396c5425f112b427d932648bcfb0ecaec9de06741471fbb2732b30f2a0883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_59396c5425f112b427d932648bcfb0ecaec9de06741471fbb2732b30f2a0883d->leave($__internal_59396c5425f112b427d932648bcfb0ecaec9de06741471fbb2732b30f2a0883d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
