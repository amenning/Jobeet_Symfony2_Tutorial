<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_ff5a53f79c5b1e19d5bf4f4c29a7bdf5d22ef5e31a3f70a5f5b0abc30e34a39a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb178407e3a092e51e339dd7a67e7c823846e3540a132405fda9201315b559fd = $this->env->getExtension("native_profiler");
        $__internal_fb178407e3a092e51e339dd7a67e7c823846e3540a132405fda9201315b559fd->enter($__internal_fb178407e3a092e51e339dd7a67e7c823846e3540a132405fda9201315b559fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb178407e3a092e51e339dd7a67e7c823846e3540a132405fda9201315b559fd->leave($__internal_fb178407e3a092e51e339dd7a67e7c823846e3540a132405fda9201315b559fd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ffbb9af6c6e3bb2e024509b678d6a8ffe66410466bc85bfb44c93a7edeb9aae6 = $this->env->getExtension("native_profiler");
        $__internal_ffbb9af6c6e3bb2e024509b678d6a8ffe66410466bc85bfb44c93a7edeb9aae6->enter($__internal_ffbb9af6c6e3bb2e024509b678d6a8ffe66410466bc85bfb44c93a7edeb9aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_ffbb9af6c6e3bb2e024509b678d6a8ffe66410466bc85bfb44c93a7edeb9aae6->leave($__internal_ffbb9af6c6e3bb2e024509b678d6a8ffe66410466bc85bfb44c93a7edeb9aae6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
